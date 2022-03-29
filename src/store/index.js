import { createStore } from 'vuex'
import router from  '../router'
import {auth} from "../firebase";
import { signInWithEmailAndPassword, signOut} from 'firebase/auth'

export default createStore({
  state: {
    user: null
  },
  mutations: {
    SET_USER (state, user){
      state.user = user
    },
    CLEAR_USER (state){
      state.user = null
    }
  },
  actions: {
    async login({commit}, details){
      const {email, password} = details

      try {
        await signInWithEmailAndPassword(auth, email, password)
      }catch (error){
        switch (error.code){
          case 'auth/user-not-found':
            alert('Пользователь не найден')
                break
          case 'auth/wrong-password':
            alert('Неправильный пароль')
            break
          default:
            alert(error.message)
        }
        return
      }
      commit('SET_USER', auth.currentUser)

      router.push('/')
    },
    async logout({commit}){
      await signOut(auth)
      commit('CLEAR_USER')
      router.push('/login')
    }
  }
})

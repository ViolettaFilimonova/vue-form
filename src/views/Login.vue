<template>
  <main class="login">
    <section class="form">
      <form  class="login" @submit.prevent="login ">
        <input type="text" placeholder="Номер договора" v-model="login_form.email">
        <input type="password " placeholder="Пароль" v-model="login_form.password">
        <input type="submit" value="Войти" >
      </form>
    </section>
    <tr>
      <th>id</th>
      <th>log</th>
      <th>pass</th>
    </tr>
  </main>
</template>

<script>
import {ref} from "vue";
import {useStore} from "vuex"

export default {
  setup(){
    const login_form = ref({});
    const store = useStore();

    const login = () => {
      store.dispatch('login', login_form.value)
    }

    return{
      login_form,
      login
    }
  }
}

</script>

<style>

</style>
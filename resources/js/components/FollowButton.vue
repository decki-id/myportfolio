<template>
  <div>
    <button
      class="btn btn-sm btn-info ml-3 dhs_btn-text-white"
      @click="followUser"
    >
      Follow
    </button>
  </div>
</template>

<script>
export default {
  props: ["userId"],

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    followUser() {
      axios
        .post("/myportfolio/instadeck/follow/" + this.userId)
        .then((response) => {
          alert(response.data);
        });
    },
  },
};
</script>

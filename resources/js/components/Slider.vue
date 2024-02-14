<template>
  <div class="slider-container">
    <input type="range" v-model="value" :min="0" :max="100" :step="1" class="slider">
    <p>{{ value }}</p>
  </div>
</template>
  
<script>

export default {
  name: 'Slider',
  props: {
    min: {
      type: Number,
      default: 0
    },
    max: {
      type: Number,
      default: 100
    },
    step: {
      type: Number,
      default: 1
    }
  },
  mounted() {
    console.log('Component mounted.')
  },
  data() {
    return {
      value: this.min
    }
  },
  watch: {
    value(newValue) {
      this.$emit('input', newValue);
    }
  }
}
</script>
  
<style scoped>
.slider-container {
  margin: 10px;
  padding: 0px;
  width: 300px;
}

.slider {
  width: 100%;
}
</style>
  
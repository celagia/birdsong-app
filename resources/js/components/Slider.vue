<template>
  <div>
    <div class="slider-component">
      <audio ref="audio" loop>
        <source :src="audioSrc" type="audio/mpeg">
        Your browser does not support the audio element.
      </audio>
      <div class="slidecontainer">
        <input ref="input" v-model="currentValue" type="range" :min="min" :max="max" class="slider" @input="onInput">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    value: {
      type: Number,
      required: true
    },
    min: {
      type: Number,
      required: true
    },
    max: {
      type: Number,
      required: true
    },
    audioSrc: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      currentValue: this.value
    };
  },
  watch: {
    currentValue(newValue) {
      this.$refs.audio.volume = newValue / 100;
    }
  },
  methods: {
    onInput() {
      this.$emit('input', parseInt(this.currentValue));
    },
    playAudio() {
      this.$refs.audio.play();
    },
    pauseAudio() {
      this.$refs.audio.pause();
    }
  }
};
</script>

<style scoped>
.slider-component .slidecontainer {
  margin: 10px;
  padding: 10px;
  width: 300px;
}

.slider-component .slidecontainer .slider {
  -webkit-appearance: none;
  appearance: none;
  width: 100%;
  height: 4px;
  border-radius: 2px;
  background: #6F7F6C;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider-component .slidecontainer .slider:hover {
  opacity: 1;
}

.slider-component .slidecontainer .slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 18px;
  height: 18px;
  background: #272d26;
  cursor: pointer;
  border-radius: 50%;
}

.slider-component .slidecontainer .slider::-moz-range-thumb {
  width: 18px;
  height: 18px;
  background: #272d26;
  cursor: pointer;
  border-radius: 50%;
}
</style>

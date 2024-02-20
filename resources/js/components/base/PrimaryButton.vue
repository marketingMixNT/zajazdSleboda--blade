<template>
    <button
        type="button"
        class="border border-black bg-transparent px-10 py-3 uppercase text-sm duration-300 tracking-wider "
        
    >
       <slot></slot>
    </button>
</template>

<script setup>

import { ref } from 'vue';


const props = defineProps({
    color: {
        type: String,
        default: ''
    }
})

const color = ref(props.color);




</script>


<style lang="scss" scoped>


.close {
  &:hover,
  &:focus {
      box-shadow: 
      inset -5.5em 0 0 0  #242424,
      inset 5.5em 0 0 0 #242424;  
      @apply text-fontLight
  }

}
// .close:hover,
// .close:focus {
//     color:white;
//   box-shadow: 
//     inset -5.5em 0 0 0  #333,
//     inset 5.5em 0 0 0 #333;  
    
// }

// .close--white:hover,
// .close--white:focus {
//     color:black;
//   box-shadow: 
//     inset -5.5em 0 0 0  #fff,
//     inset 5.5em 0 0 0 #fff;  
    
// }

</style>
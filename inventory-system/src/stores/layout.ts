// Utilities
import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useLayoutStore = defineStore('layout', ()=>{
    const navDraw = ref(true)

    return {
        navDraw
    }
})

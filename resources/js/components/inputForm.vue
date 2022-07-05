<template>
    <div :class="name + 'class'">
        <label :for="name">{{labelName}}</label>
        <input type="text" required :name="name" :value="modelValue" :id="name" @inout="$emit('update:modelValue',$event.target.value)">
    </div>
</template>

<script>
    export default {
        name:"inputForm",
        props:{name:String,modelValue:String},
        computed:{
            labelName(){
                const Label=this.name[0].toUpperCase() + this.name.slice(1);;
                return this.name === "name" ? "Full Name" : Label;
            }
        }

    }
</script>

<style  scoped>
    input{
        width: 100%;
        padding-bottom:25px;
        color:var(--span-color);
        font-size: 19px;
        font-weight: bold;
        border-bottom: 3px solid var(--word-color);
        outline: none;
        margin-bottom: 65px;
    }
    input:focus{
        border-bottom-color:var(--span-color);
    }
    label{
        width: 100%;
        display: block;
        color: var(--word-color);
        font-size: 22px;
        font-weight: 500;
        margin-bottom: 20px;
        cursor: pointer;
        text-align: left;
    }
</style>
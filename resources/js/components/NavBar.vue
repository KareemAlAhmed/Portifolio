<template>
    <div class="nav">
        <p class="text-xl" style="letter-spacing: 1.5px;">Kareem</p>
        <div class="sections">
            <ul>
                <li><a href="#work" >Works </a></li>
                <li><a href="#specialized" >About </a></li>
                <li><a href="#contact" >Contact</a></li>
            </ul>
        </div>
        <div class="hire">
            <a href="#">Hire Me</a>
        </div>
    </div>
</template>

<script>
    export default {
        name:'NavBar',
    }
</script>

<style scoped>
    .nav{
        height:70px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.25rem;
        margin-bottom: 6rem;
    }
    .sections ul {
        list-style: none;
        display: flex;
    }
    .sections ul li{
        margin: 0 40px;
        letter-spacing: 0.6px;
        cursor: pointer;
        position: relative;
    }
    .sections ul li:hover a{
        color:var(--word-color);
    }
    .sections ul li::after{
        content: '';
        width: 0;
        height: 2px;
        position: absolute;
        left: 50%;
        bottom:-3px;
        transform: translateX(-50%);
        background-color: white;
        transition: width 0.5s ease ;
    }
    .sections ul li:hover::after{
        width: 50%;
        background-color: var(--word-color);
    }
    .sections ul li:nth-child(2) a::after{
        content: '';
        width: 4px;
        height: 4px;
        position: absolute;
        left: -40px;
        bottom: 47%;
        background-color: var(--word-color);
        border-radius: 50px
    }
    .sections ul li:nth-child(2) a::before{
        content: '';
        width: 4px;
        height: 4px;
        position: absolute;
        right: -40px;
        bottom: 47%;
        background-color: var(--word-color);
        border-radius: 50px
    }
    .hire{
        background-color: white;
        padding: 8px;
        position: relative;
        transition: all 0.4s ease;
        cursor: pointer;
    }
    .hire a{
        color: var(--bg-color);
        font-size: 19px;
        font-weight: 600;
        z-index: 99;
        transition: all 0.2s ease 0.1s;
    }
   .hire:hover a{
        color: white;
    }
   .hire:hover {
        background-color: var(--span-color);
        color: white;
    }
    @media only screen and (max-width: 768px){
        .sections{
            display: none;
        }
        .nav{
        margin-bottom: 0rem;
    }
    }
</style>
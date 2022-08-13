<template>
<!--Intro Component -->
    <div class="firstSection">
        <div class="intro">
            <h1>Hi,I'm <span class="name">Kareem</span> Web Developer Based in Lebanon</h1>
            <p>I am an undergraduate student looking to earn some experience and money by doing projects .</p>
            <div class="getInTouch" style="position:relative;">
                <a href="#" class="inTouch">Get In Touch</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        
    }
</script>

<style scoped>
    .firstSection{
        padding: 12rem 0 4rem;
        margin-bottom: 20rem;
    }
    .intro{
        display: flex;
        flex-direction: column;
        margin: 0 20% 0 20%;
    }
    h1{
        /* font-size: 71px; */
        font-size: 80px;
    font-weight: bold;
    color: #ffffff;
    /* line-height: 82px; */
    line-height: 100px;
    margin-bottom: 15px;
    width: 101%;
    }
    .name{
        background-color: var(--span-color);
        padding: 5px 10px;
    }
    p{
        /* font-size: 20px; */
        font-size: 22px;
        color: var(--word-color);
        line-height: 33px;
        margin-bottom: 15px;
    }
    .inTouch{
        background-color: white;
        color: var(--bg-color);
        padding: 10px 15px;
        font-size: 19px;
        font-weight: 600;
        border-radius: 51px;
        position: absolute;
        z-index: 99;
        transition: all 0.2s ease 0.3s;
    }
    .inTouch::before{
        content: '';
        position: absolute;
        width: 0;
        height: 100%;
        right: -5px;
        z-index: -5;
        top: 0;
        background-color: var(--span-color);
        transition: all 0.4s ease;
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
    }
    .inTouch::after{
        content: '';
        position: absolute;
        width: 0;
        height: 100%;
        left: -5px;
        z-index: -4;
        top: 0;
        background-color: var(--span-color);
        transition: all 0.4s ease;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
    }
    .inTouch:hover::after,
    .inTouch:hover::before{
        width: 55%;
    }
    .inTouch:hover{
        color: white;
    }
     @media only screen and (max-width: 768px){
        .firstSection{
            padding: 4rem 0 4rem;
            margin-bottom: 8rem;
        }
        .intro{
            margin: 0 15% 0 15%;
        }
        h1{
            font-size: 58px;
            line-height: 80px;
            width: 100%;
        }
        p{
            font-size: 19px;
        }
        }
</style>
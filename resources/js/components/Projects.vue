<template>
    <div class="work" id="work">
        <hr>
        <div class="backgroundName" >
            {{bgName}}
        </div>
        <div class="projectsContainer">
            <div class="projects">
                <div class="firstProject"></div>
                <div class="secondProject"></div>
                <div class="thirdProject"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:"Projects",
        data(){
            return{
                bgName:"<projects>"
            }
        }
    }
</script>

<style scoped>
    .work{
        position: relative;
        max-width: 100vw;
        min-height: 100vh;
        padding: 12% 11% ;
    }
    .work::before{
        content: '';
        height: 1px;
        min-width: 95%;
        background-color: #2a2a2a;
        margin: 0 3%;
        position: absolute;
        top: -40px;
        left: 0;
    }
    .work::after{
        content: '';
        height: 1px;
        min-width: 95%;
        background-color: #2a2a2a;
        margin: 0 3%;
        position: absolute;
        bottom: 70px;
        left: 0;
    }
    .backgroundName{
        position: absolute;
        font-size: 210px;
        top: -15px;
        z-index: 0;
        right: 50%;
        transform: translateX(50%);
        color: #a9a9a933;
        font-weight: bold;
    }
    .projectsContainer{
        position: relative;
        height: 100vh;
        max-width: 100vw;
    }
    .projects{
        min-height: 100%;
        z-index: 555;
        display: grid;
        grid-template-columns: repeat(2,30%) 37%;
        grid-template-rows: repeat(2,calc((100% / 2) - 15px));
        gap: 20px;
    }
    .firstProject{
        grid-area: 1 / 1 / 3 / 3;
        background-color: #121212;
        cursor: pointer;
    }
    .secondProject{
        grid-column-start: 3;
        grid-row-start: 1;
        background-color: #3e3e42;
        cursor: pointer;
    }
    .thirdProject{
        grid-column-start: 3;
        grid-row-start: 2;
        background-color: #1C1C1C;
        cursor: pointer;
    }
@media only screen and (max-width: 768px){
    .backgroundName{
        font-size: 55px;
    }
     .work{
        padding: 12% 15% ;
    }
    .projects{
        grid-template-columns: calc(100%);
        grid-template-rows: repeat(3,calc((100% / 3) - 20px));
    }
    .firstProject{
        grid-area: 1 / 1 ;
    }
    .secondProject{
        grid-column-start: 1;
        grid-row-start: 2;
    }
    .thirdProject{
        grid-column-start: 1;
        grid-row-start: 3;
    }
    .work::before{
        content: '';
        height: 1px;
        min-width: 95%;
        background-color: #2a2a2a;
        margin: 0 3%;
        position: absolute;
        top: -30px;
        left: 0;
    }
    .work::after{
        content: '';
        height: 1px;
        min-width: 95%;
        background-color: #2a2a2a;
        margin: 0 3%;
        position: absolute;
        bottom: 20px;
        left: 0;
    }
}
</style>
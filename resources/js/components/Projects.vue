<template>
    <div class="work" id="work">
        <div class="backgroundName" >
            {{bgName}}
        </div>
        <div class="projectsContainer">
            <div class="projects">
                <div class="firstProject">
                    <img src="../assets/nft-collection.png" >
                    <div class="projectInfo"></div>  
                </div>
                
                <div class="secondProject">
                    <div class="projectInfo"></div>
                </div>
                <div class="thirdProject">
                    <div class="projectInfo"></div>
                </div>
                <div class="fourthProject">
                    <div class="projectInfo"></div>
                </div>
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
    .work .backgroundName{
        position: absolute;
        font-size: 210px;
        top: -15px;
        z-index: 0;
        right: 50%;
        transform: translateX(50%);
        color: #a9a9a933;
        font-weight: bold;
    }
    .work .projectsContainer{
        position: relative;
        min-height: 100vh;
        max-width: 100vw;
    }
    .work .projects{
        min-height: 100%;
        z-index: 555;
        display: grid;
        grid-template-columns: 100%;
        grid-template-rows: repeat(4 , 300px);
        grid-template-areas: 
        "first"
        "second"
        "third"
        "fourth"
        ;
        gap: 20px;

    }
    .work .firstProject{
        grid-area: first;
        background-color: #121212;
        cursor: pointer;
        overflow:hidden;
        display:flex;
    }
    .work .secondProject{
        grid-area: second;
        background-color: #3e3e42;
        cursor: pointer;
        overflow:hidden;
        display:flex;
    }
    .work .thirdProject{
        grid-area: third;
        background-color: #1C1C1C;
        cursor: pointer;
        overflow:hidden;
        display:flex;
    }
    .work .fourthProject{
        grid-area: fourth;
        background-color: #1C1C1C;
        cursor: pointer;
        overflow:hidden;
        display:flex;
    }
    .work .firstProject img,.work .secondProject img,
    .work .thirdProject img,.work .fourthProject img{
        width:40%;
        height:100%;
    }
    .work .projectInfo{           
        width:60%;
    }
@media only screen and (max-width: 768px){
    .work .backgroundName{
        font-size: 55px;
    }
    .work{
        padding: 12% 15% ;
    }
    .work .projects{
        grid-template-columns: calc(100%);
        grid-template-rows: repeat(3,calc((100% / 3) - 20px));
    }
    .work .firstProject{
        grid-area: 1 / 1 ;
    }
    .work .secondProject{
        grid-column-start: 1;
        grid-row-start: 2;
    }
    .work .thirdProject{
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
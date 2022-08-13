<template>
    <div class="thirdSection">
        <div class="backgroundName" >
            {{bgName}}
        </div>
        <div class="biography">
            <div class="leftSide">
                <h2>My biography</h2>
            </div>
            <div class="rightSide">
                <p>My name is Kareem Ahmed , i am 19 years old from Lebanon and  undergraduate  Computer science student in Lebanese University.
                I am looking to do Projects in order to get some experience and knowledge about programming and coding . </p>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data(){
            return{
                bgName:"<about me>"
            }
        }
    }
</script>

<style scoped>
.thirdSection{
    position: relative;
    padding: 12% 12% 0;
}

.backgroundName{
    position: absolute;
    width: fit-content;
    color: #a9a9a933;
    font-size: 200px;
    font-weight: bold;
    top: -15px;
    left: 12%;

}
.biography{
    max-width: 100vw;
    display: flex;
    margin-top: 50px;
}
.leftSide{
    font-weight: bold;
    color: white;
    margin-right: 115px;
}
.rightSide{
    display: flex;
    flex-direction: column;
    gap: 20px;
    color: white;
}
h2{
    font-size: 47px;
    width: 300px;
}
p{
    font-size: 20px;
    letter-spacing: 1px;
    line-height: 45px;
}
</style>
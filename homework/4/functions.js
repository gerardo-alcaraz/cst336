var planets = [];

function populatePlanets(){
    var temp = [];
    for(var i = 0; i < 9; i++){
        var imagepath = "";
        imagepath = "images/" + i + ".png";
        temp[i] = imagepath;
    }
    return temp;
}

planets = populatePlanets();

$(".randomButton").on("click", function(){
   $('div.column').empty();
   randomize();
});

$(".normalButton").on("click", function(){
   $('div.column').empty();
   displayPlanets();
});
function displayPlanets(){
    for(var i = 1; i < 9; i++){
        if(i == 6){
            $(".column").append("<img height='200' width='290' hspace='20' src=" + planets[i] + ">");
        }
        else{
            $(".column").append("<img height='200' width='200' hspace'20' src=" + planets[i] + ">");
        }
    }
}

function randomize(){
        var nums = [1,2,3,4,5,6,7,8],
            ranNums = [],
            i = nums.length,
            j = 1;
        
        while (i--) {
            j = Math.floor(Math.random() * (i+1));
            ranNums.push(nums[j]);
            if(nums[j] == 6){
                $(".column").append("<img height='200' width='290' hspace='20' src=" + planets[nums[j]] + ">");
            }
            else{
                
                $(".column").append("<img height='200' width='200' hspace'20' src=" + planets[nums[j]] + ">");
            }
            nums.splice(j,1);
        }
    }

function init()
{
    displayPlanets();
    //randomize();
}


window.onload = init();
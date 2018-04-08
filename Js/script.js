var EncounterMonsterIDList= new array();

function filterOpMonsterType() {
    //https://www.w3schools.com/howto/howto_js_filter_lists.asp

    var input,filter,ul,li,a;
    input=document.getElementById("filterOpMonsterType");
    filter=input.value.toUpperCase();
    ul=document.getElementById("MonsterLijstOverzicht");
    li=ul.getElementsByTagName("li");


    // lijst aflopen
        for (var i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
}
function addEncounterMonster(){
$('button.EncounterMonsterToevoegen').on("click",function () {
    EncounterMonsterIDList.add()
})
};

$(document).ready(function() {
   $('li.MonsterNaam').on("mouseover",function (e) {

   })
});
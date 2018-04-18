
var encounterMonsterIDList =[];
var encounterMonsterNaamList =[];
tellerencounterMonsterList=0;
if (sessionStorage.getItem("encounterMonsterIDList") != null){
    encounterMonsterIDList =JSON.parse(sessionStorage.getItem("encounterMonsterIDList"));
}
else{
    sessionStorage.setItem("encounterMonsterIDList",JSON.stringify(encounterMonsterIDList));
}
if (sessionStorage.getItem("encounterMonsterNaamList") != null){
    encounterMonsterNaamList =JSON.parse(sessionStorage.getItem("encounterMonsterNaamList"));
}else {
    sessionStorage.setItem("encounterMonsterIDList",JSON.stringify(encounterMonsterIDList));
}
if (sessionStorage.getItem("tellerencounterMonsterList") !=0){
    var tellerencounterMonsterList=sessionStorage.getItem("tellerencounterMonsterList");

}else{
    sessionStorage.setItem("tellerencounterMonsterList",tellerencounterMonsterList);

}





var detailID=0;

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
function printList(){
    console.log("doe iets");
    var afdruk = JSON.parse(sessionStorage.getItem("encounterMonsterNaamList"));
    var tellerencounterMonsterList = sessionStorage.getItem("tellerencounterMonsterList");
    for (var i=0;i<tellerencounterMonsterList;i++){
        $('#encounterAfdruk').append("<p>"+ afdruk[i]+"</p>");

    }
}



$(document).ready(function() {

    $('button.EncounterMonsterToevoegen').on("click",function () {


        encounterMonsterIDList[tellerencounterMonsterList]=($(this).siblings('#MonsterID').text());
        encounterMonsterNaamList[tellerencounterMonsterList]=($(this).siblings('#MonsterNaam').text());
        tellerencounterMonsterList++;
        sessionStorage.setItem("tellerencounterMonsterList",tellerencounterMonsterList);
        sessionStorage.setItem("encounterMonsterIDList",JSON.stringify(encounterMonsterIDList));
        sessionStorage.setItem("encounterMonsterNaamList",JSON.stringify(encounterMonsterNaamList));
        copy = $(this).siblings('#MonsterNaam').text();
        $('#listSelectetMonsters').append("<p>" +copy +"</p>");


   });

    $('button.gaNaarDetails').on("click",function () {

        detailID=($(this).siblings('#MonsterID').text());
        $.post('../Controllers/showMonsterDetail.php',{id:detailID});
        location.href="../Pages/Monsterdetailpagina.php?id="+detailID;
    });


});
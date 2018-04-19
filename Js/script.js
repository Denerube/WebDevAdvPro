

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




$(document).ready(function() {
    $('button.gaNaarDetails').on("click",function () {

        detailID=($(this).siblings('#MonsterID').text());
        $.post('../Controllers/showMonsterDetail.php',{id:detailID});
        location.href="../Pages/Monsterdetailpagina.php?id="+detailID;
    });
   $('#AddmonstereToEncounter').submit(function (e) {
            e.preventDefault();
            var form=$(this);
            $.ajax({
                url: form.attr("action"),
                type: "POST",
                datatype:"json",
                data:form.serialize(),
                succes:function () {
                    console.log("item toegevoegd");
                    copy = $(this).siblings('#MonsterNaam').text();
                    $('#listSelectetMonsters').append("<p>" +copy +"</p>");
                }
            });
   });

});
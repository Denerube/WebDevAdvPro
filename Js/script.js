

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
    //uit werkcollege
    $('form.AddmonstereToEncounter').on('submit', function(e) {
        //console.log("doe iets");
        e.preventDefault();
        var formData = $(this);
        $.ajax ({
            url: "../Controllers/MonsterToevoegenEncounter.php",
            type: "post",
            data: formData.serialize(),
            error: function(xhr, textStatus, error){
                console.log("er is iets fout gegaan");
                console.log(xhr.statusText);
                console.log(textStatus);
                console.log(error);
            },
            success: function(){
                console.log(formData, ' added to encounter');
            }
        });

    });


    $('button.gaNaarDetails').on("click",function () {

        detailID=($(this).siblings('#MonsterID').text());
        console.log(detailID);
        $.get('../Controllers/showMonsterDetail.php',{id:detailID});
        location.href="../Pages/Monsterdetailpagina.php?id="+detailID;
    })

});
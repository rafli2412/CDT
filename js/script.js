// navbar
let menuToggle = document.querySelector('.toggle');
let menuToggleColor = document.querySelector('.toggle.color')
let colorPallete = document.querySelector('.color-pallete')
let navigation = document.querySelector('.navigation');
let content = document.querySelectorAll('.content');

menuToggle.onclick = function() {
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
    
    let i;
    for (i=0; i<content.length; i++) {
        content[i].classList.toggle('active');
    }
}

//active
let list = document.querySelectorAll('.list');
for (let i = 0; i<list.length; i++) {
    list[i].onclick = function() {
        let j = 0;
        while(j<list.length) {
            list[j++].className = "list";
        }

        for(let k=0; k<content.length; k++) {
            content[k].className = "content close";
        }

        list[i].className = "list active";
        content[i].className = "content";
    }
}

//ajax

var kelompok = document.getElementById('kelompok');
var maba = document.getElementById('nama-maba');
var mabavalue = document.getElementById('maba');

kelompok.addEventListener("change", function() {
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            mabavalue.value = "";
            maba.innerHTML = xhr.responseText;
        }
    }

    xhr.open('GET', 'ajax/maba.php?kelompok=' + kelompok.value, true);
    xhr.send();

    // var test = kelompok.value;
    // console.log(test);
})

//content
// for (let i=0; i<content.length; i++) {
//     content[i].onclick = function() {
//         let j = 0;
//     }
// }
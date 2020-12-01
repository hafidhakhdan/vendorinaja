//membuat intreaksi image
const thumb = document.querySelectorAll('.thumb');
const jumbo = document.querySelector('.jumbo');
const container = document.querySelector('.container-fluid');
container.addEventListener('click', function(event){
    if(event.target.className == 'thumb'){
        event.target.parentElement.previousElementSibling.src = event.target.src;

        thumb.forEach(function(e){
            e.setAttribute('class','thumb');
        });
        event.target.classList.add('active');
    }
})
//membuat intreaksi image
const thumbs2 = document.querySelectorAll('.thumbs2');
const containers2 = document.querySelector('.containers2');
containers2.addEventListener('click', function(event){
        if(event.target.className == 'thumbs2'){
            thumbs2.forEach(function(e){
                e.setAttribute('class','thumbs2');
            });
            event.target.classList.add('show2');
         
        };
})

//membuat intreaksi image
const thumbs = document.querySelectorAll('.thumbs');
const containers = document.querySelector('.containers');
containers.addEventListener('click', function(event){
    if(event.target.className == 'thumbs'){
        thumbs.forEach(function(e){
            e.setAttribute('class','thumbs');
        });
        event.target.classList.add('show1');
 
    };
})

// untuk ubah warna bg kaos
const color = document.querySelectorAll('.thumbs2');
const bg = document.querySelector('.bg');
color.forEach(function(e){
  e.addEventListener('click', ()=>{
    bg.setAttribute('class','bg');
    if(e.value == 'maroon'){
      bg.classList.add('bg');
    }else if(e.value == 'blue'){
      bg.classList.add('bg2');
    }else if(e.value == 'orange'){
      bg.classList.add('bg3');
    }else if(e.value == 'green'){
      bg.classList.add('bg4');
    }else if(e.value == 'black'){
      bg.classList.add('bg5');
    }
    
  });
})
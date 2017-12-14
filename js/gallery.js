const liket = document.querySelectorAll('.button');

const tykkaa = (evt)=>{
  const nappi = evt.currentTarget;
  const kuvaid = nappi.dataset.kid;

  const asetukset = {
    credentials: 'same-origin'
  };

  fetch('like.php?kid='+kuvaid, asetukset).then((response)=>{
    return response.text();

  }).then((text)=> {
    document.querySelector('#kuva'+kuvaid).innerHTML=text;
      }
  );
}

liket.forEach((like)=>{
  like.addEventListener('click',tykkaa);

});
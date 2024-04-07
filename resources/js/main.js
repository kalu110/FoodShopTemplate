export function chechkifInputEmptyNav(el){
	if(el.value.length > 2)
		document.querySelector('.buttonSearchNav').style.display="block";
	else
		document.querySelector('.buttonSearchNav').style.display="none";
}

export function closeAlert(el){
	let div = el.parentElement;
	let divParent = div.parentElement;
	divParent.style.display="none";
}

export function searchProductInput(el){

let html = document.querySelector('#ispisProductJS');
  html.innerHTML = '';
  
  for(let i of product){
    if(i.nameProduct.toLowerCase().trim().includes(el.value.toLowerCase().trim()))
    {
      let nameCat = '';
      for(let j of category){
        if(j.id == i.idCategory){
          nameCat = j.nameCategory;
        }
      }
      html.innerHTML += `
        <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-4">
                          <img alt="Image placeholder" src="/storage/image/${i.imageProduct}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">${i.nameProduct}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                     <span class="tableinputfontOpaciy">
                    ${i.descriptionProduct}
                    </span>
                    </td>
                    <td>
                      <span id="spanBRCategoryPR" style="font-size: 15px;">${i.priceProduct} KM</span>
                    </td>
                   <td>
                    <span class="tableinputfontOpaciy">
                   ${nameCat}
                   </span>
                   </td>
                    <td>
                      <div style="color:rgba(0,0,0,0.4);" class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                     <td  class="text-right" id='tdOption${i.id}'>
                    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editProduct(this,${i.id})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="/deleteProduct/${i.id}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>
      `;
    }
  }

  if(html.innerHTML == ''){
    for(let i of product){
       let nameCat = '';
      for(let j of category){
        if(j.id == i.idCategory){
          nameCat = j.nameCategory;
        }
      }
      html.innerHTML += `
        <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-4">
                          <img alt="Image placeholder" src="/storage/image/${c.imageProduct}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">${i.nameProduct}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                     <span class="tableinputfontOpaciy">
                    ${i.descriptionProduct}
                    </span>
                    </td>
                    <td>
                    <span id="spanBRCategoryPR" style="font-size: 15px;">${i.priceProduct} KM</span>

                    </td>
                   <td>
                    <span class="tableinputfontOpaciy">
                   ${nameCat}
                   </span>
                   </td>
                    <td>
                      <div style="color:rgba(0,0,0,0.4);" class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                     <td  class="text-right" id='tdOption${i.id}'>
                    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editProduct(this,${i.id})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="deleteProduct/${i.id}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>
      `;
    
  }
  }
}

export function searchCategoryInput(el){
	let html = document.querySelector('#ispisCategoryJS');
	html.innerHTML = '';
  
	for(let i of category){
    let suma =0;
		if(i.nameCategory.toLowerCase().trim().includes(el.value.toLowerCase().trim()))
		{

      for(let j of product){
        if(j.idCategory == i.id){
          suma++;
        }
      }
			html.innerHTML += `
			  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="/storage/image/${i.imageCategory}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">${i.nameCategory}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <span class="tableinputfontOpaciy">
                    ${i.descriptionCategory}
                    </span>
                    </td>
                    <td>
                      <span id="spanBRCategoryPR">${suma}</span>
                    </td>
                   
                    <td>
                      <div style="color:rgba(0,0,0,0.4);" class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                  <td class="text-right" id='tdOption${i.id}'>
                    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editCategory(this,${i.id})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="/deleteCategory/${i.id}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>
			`;
		}
	}

	if(html.innerHTML == ''){
		for(let i of category){
		 let suma =0;
     for(let j of product){
        if(j.idCategory == i.id){
          suma++;
        }
      }
			html.innerHTML += `
			  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="/storage/image/${c.imageCategory}">
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">${i.nameCategory}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <span class="tableinputfontOpaciy">
                    ${i.descriptionCategory}
                    </span>
                    </td>
                    <td>
                    <span id="spanBRCategoryPR">${suma}</span>

                    </td>
                   
                    <td>
                      <div style="color:rgba(0, 0, 0, 0.4);" class="d-flex align-items-center">
                        <span class="mr-2">60%</span>
                        <div>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="text-right" id='tdOption${i.id}'>
                    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editCategory(this,${i.id})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="/deleteCategory/${i.id}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>
			`;
		
	}
	}
}


export function nazivKategorijeDuplicat(el){

  let html = document.querySelector('#duplicateNameCategory');

  html.innerHTML = el.value;
}

export function cenaProductDuplicat(el){

  let html = document.querySelector('#cenaKarticaShopSoutpute');

  html.innerHTML = el.value + ' KM';
}

export function descProductDuplicat(el){

  let html = document.querySelector('#opisProizvodaAddChange');

  html.innerHTML = el.value ;
}

export function editCategory(el,id){

let c = category.find((cd)=> cd.id == id);
console.log(c);
  let div = el.parentNode;
  let pr = div.parentNode;
 
  let pr2 = pr.parentElement;

  let pr3 = pr2.parentElement;

  let pr4 = pr3.parentElement;

  let childes = pr4.childNodes;

  childes[1].innerHTML = `
<div class="media align-items-center" bis_skin_checked="1">
                        <a  class="avatar rounded-circle mr-5" >
                          <img alt="Image placeholder" src="/storage/image/${c.imageCategory}">
                          
                             <span style="height:100%;position:relative;"><i  onclick="setOldImage(this,${c.id})" class="fas fa-edit" style="cursor:pointer; left:5px;position:absolute; bottom:0; color:black; vertical-align:bottom;"></i></span>

                        </a>
                        <div class="media-body" bis_skin_checked="1">
  <input form="editCategoryForm${c.id}" id="kategorijeTableSearch" style="background-color:transparent;" name="newCategoryName"  type="text" value="${c.nameCategory}">
                        </div>
                      

  `;

  childes[3].innerHTML = `
  <textarea rows="1" form="editCategoryForm${c.id}" style="background-color:transparent;" name="newCategoryDescription" id="kategorijeTableSearch" type="text"> ${c.descriptionCategory}</textarea>
  `;
   console.log(childes,c,c.imageCategory);

   document.getElementById('tdOption'+c.id).innerHTML=`


  <button  style="background-color:transparent; border:none;" type="submit" form="editCategoryForm${c.id}"> <i class="fas fa-save fa-xl mr-3 iconHoverEditCat"></i></button>
   <button style="background-color:transparent; border:none;" type="submit" onclick="setRowFirstMoveCategory(this,${c.id})"  <i   class="fas fa-close fa-xl mr-2 iconHoverEditCatClose"></i> </button>

   `;
}


export function setOldImage(el,id){

  let div = el.parentNode;
  let pr = div.parentNode;
  let cd = pr.parentNode;
  let child = cd.parentNode;
  let chld2 = child.childNodes;

let c = category.find((a)=> a.id == id);
console.log(chld2);

  chld2[1].innerHTML = `
  <div class="media align-items-center" bis_skin_checked="1" style="width:100%;">
                        <a  style="width:50%;" class="avatar rounded-circle">
                            <input form="editCategoryForm${c.id}" type="file" name="newPhotoCategory">
  <span><i style="cursor:pointer;" onclick="getOldPhoto(this,${c.id})" class="fas fa-close"></i></span>
                        </a>

                     <div class="media-body" bis_skin_checked="1">
  <input form="editCategoryForm${c.id}" style="background-color:transparent;" name="newCategoryName" id="kategorijeTableSearch"  type="text" value="${c.nameCategory}">
                        </div>

  </div>

  `;
}

export function getOldPhoto(el,id){


 let div = el.parentNode;
  let pr = div.parentNode;
  let cd = pr.parentNode;
  let child = cd.parentNode;
  let chld2 = child.childNodes;

let c = category.find((a)=> a.id == id);
console.log(chld2);

  chld2[1].innerHTML = `
<div class="media align-items-center" bis_skin_checked="1">
   <a  class="avatar rounded-circle mr-5">
                          <img alt="Image placeholder" src="/storage/image/${c.imageCategory}">
                             <span style="height:100%;position:relative;"><i  onclick="setOldImage(this,${c.id})" class="fas fa-edit" style="cursor:pointer; left:5px;position:absolute; bottom:0; color:black; vertical-align:bottom;"></i></span>

                        </a>

 

  <div class="media-body" bis_skin_checked="1">
  <input form="editCategoryForm${c.id}" id="kategorijeTableSearch" name="newCategoryName" style="background-color:transparent;" type="text" value="${c.nameCategory}">
  </div>
    </div>


  `;

}

export function setRowFirstMoveCategory(el,id){
  let div = el.parentNode;
  let div2 = div.parentNode;
let c = category.find((a)=> a.id == id);
let cname = product.filter((a)=> a.idCategory == c.id);
div2.innerHTML = `

<tr>
                    <th scope="row">
                      <div class="media align-items-center" bis_skin_checked="1">
                        <a href="#" class="avatar rounded-circle mr-5">
                          <img alt="Image placeholder" src="/storage/image/${c.imageCategory}">
                        </a>
                        <div class="media-body" bis_skin_checked="1">
                          <span class="mb-0 text-sm">${c.nameCategory}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                    <span class="tableinputfontOpaciy">
                   ${c.descriptionCategory}
                   </span>
                    </td>
                    <td>
                         
                         <span id="spanBRCategoryPR">${cname.length}</span>
                    </td>
                   
                    <td>
                      <div style="color:rgba(0, 0, 0, 0.4);" class="d-flex align-items-center" bis_skin_checked="1">
                        <span class="mr-2">60%</span>
                        <div bis_skin_checked="1">
                          <div class="progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" bis_skin_checked="1"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="text-right" id="tdOption${c.id}">
                    <div class="dropdown" bis_skin_checked="1">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editCategory(this,${c.id})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="/deleteCategory/${c.id}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>

`;

}



export function editProduct(el,id){

let c = product.find((cd)=> cd.id == id);
console.log(c);
  let div = el.parentNode;
  let pr = div.parentNode;
 
  let pr2 = pr.parentElement;

  let pr3 = pr2.parentElement;

  let pr4 = pr3.parentElement;

  let childes = pr4.childNodes;
  childes[1].innerHTML = `
<div class="media align-items-center" bis_skin_checked="1">
                        <a  class="avatar rounded-circle mr-4" >
                          <img alt="Image placeholder" src="/storage/image/${c.imageProduct}">
                          
                             <span style="height:100%;position:relative;"><i  onclick="setOldImageProduct(this,${c.id})" class="fas fa-edit" style="cursor:pointer; left:5px;position:absolute; bottom:0; color:black; vertical-align:bottom;"></i></span>

                        </a>
                        <div class="media-body" bis_skin_checked="1">
  <input form="formEditProduct${c.id}" id="kategorijeTableSearch" style="background-color:transparent;" name="newProductName"  type="text" value="${c.nameProduct}">
                        </div>
                      

  `;

  childes[3].innerHTML = `
  <textarea rows="1" form="formEditProduct${c.id}" style="background-color:transparent;" name="newProductDescription" id="kategorijeTableSearch" type="text"> ${c.descriptionProduct}</textarea>
  `;

   childes[5].innerHTML = `
  <input  form="formEditProduct${c.id}" style="background-color:transparent;"  name="newProductPrice" value="${c.priceProduct}" id="kategorijeTableSearch" type="text"> 
  `;
  
  childes[7].innerHTML = `
    <select form="formEditProduct${c.id}" style="background-color:transparent; border:none; border-radius:none;border-bottom:1px solid black;"  name="newProductCategory" id="">`;



    for(let i of category){
      if(i.id == c.idCategory){
       document.querySelector("[name='newProductCategory']").innerHTML += `<option value="${i.id}" class="form-control" selected value="${i.id}">${i.nameCategory}</option>`;

      }
      else{
         document.querySelector("[name='newProductCategory']").innerHTML += `<option value="${i.id}" class="form-control" value="${i.id}">${i.nameCategory}</option>`;
      }
    }

   document.getElementById('tdOption'+c.id).innerHTML=`


  <button  style="background-color:transparent; border:none;" type="submit" form="formEditProduct${c.id}"> <i class="fas fa-save fa-xl mr-3 iconHoverEditCat"></i></button>
   <button style="background-color:transparent; border:none;" type="submit" onclick="setRowFirstMoveProduct(this,${c.id})"  <i   class="fas fa-close fa-xl mr-2 iconHoverEditCatClose"></i> </button>

   `;

}

export function setRowFirstMoveProduct(el,id){
let div = el.parentNode;
  let div2 = div.parentNode;
let c = product.find((a)=> a.id == id);
let cname = category.find((a)=> a.id == c.idCategory);
div2.innerHTML = `

<tr>
                    <th scope="row">
                      <div class="media align-items-center" bis_skin_checked="1">
                        <a href="#" class="avatar rounded-circle mr-4">
                          <img alt="Image placeholder" src="/storage/image/${c.imageProduct}">
                        </a>
                        <div class="media-body" bis_skin_checked="1">
                          <span class="mb-0 text-sm">${c.nameProduct}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                     <span class="tableinputfontOpaciy">
                   ${c.descriptionProduct}
                   </span>
                    </td>

                    <td>
                         
                         <span id="spanBRCategoryPR">${c.priceProduct}</span>
                    </td>
                   <td>
                    <span class="tableinputfontOpaciy">
                   ${cname.nameCategory}
                   </span>
                   </td>
                    <td>
                      <div style="color:rgba(0,0,0,0.4);" class="d-flex align-items-center" bis_skin_checked="1">
                        <span class="mr-2">60%</span>
                        <div bis_skin_checked="1">
                          <div class="progress" bis_skin_checked="1">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;" bis_skin_checked="1"></div>
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="text-right" id="tdOption${c.id}">
                    <div class="dropdown" bis_skin_checked="1">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa-solid fa-ellipsis-vertical"></i>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" onclick="editProduct(this,${c.id})"> <i class="fa-solid fa-pen ml-3"></i>Uredi </a></li>
    <li><a class="dropdown-item" href="/deleteProduct/${c.id}"> <i class="fa-solid fa-trash ml-3"></i>Obrisi  </a></li>
  </ul>
</div>
                    </td>
                  </tr>

`;

}



export function setOldImageProduct(el,id){

  let div = el.parentNode;
  let pr = div.parentNode;
  let cd = pr.parentNode;
  let child = cd.parentNode;
  let chld2 = child.childNodes;

let c = product.find((a)=> a.id == id);
console.log(chld2);

  chld2[1].innerHTML = `
  <div class="media align-items-center" bis_skin_checked="1" style="width:100%;">
                        <a  style="width:50%;" class="avatar rounded-circle">
                            <input form="formEditProduct${c.id}" type="file" name="newPhotoProduct">
  <span><i style="cursor:pointer;" onclick="getOldPhotoProduct(this,${c.id})" class="fas fa-close"></i></span>
                        </a>

                     <div class="media-body" bis_skin_checked="1">
  <input form="formEditProduct${c.id}" style="background-color:transparent;" name="newProductName" id="kategorijeTableSearch"  type="text" value="${c.nameProduct}">
                        </div>

  </div>

  `;
}

export function getOldPhotoProduct(el,id){


 let div = el.parentNode;
  let pr = div.parentNode;
  let cd = pr.parentNode;
  let child = cd.parentNode;
  let chld2 = child.childNodes;

let c = product.find((a)=> a.id == id);
console.log(chld2);

  chld2[1].innerHTML = `
<div class="media align-items-center" bis_skin_checked="1">
   <a  class="avatar rounded-circle mr-4">
                          <img alt="Image placeholder" src="/storage/image/${c.imageProduct}">
                             <span style="height:100%;position:relative;"><i  onclick="setOldImageProduct(this,${c.id})" class="fas fa-edit" style="cursor:pointer; left:5px;position:absolute; bottom:0; color:black; vertical-align:bottom;"></i></span>
                        </a>
  <div class="media-body" bis_skin_checked="1">
  <input form="formEditProduct${c.id}" id="kategorijeTableSearch" name="newProductName" style="background-color:transparent;" type="text" value="${c.nameProduct}">
  </div>
    </div>
  `;

}

export function changeIconFontUp() {
  setTimeout(function(){
  let clps = document.querySelector('#collapseExample');
  let html = document.querySelector('#down-up-arrow');
  if(clps.classList.contains('show')){
  html.classList.replace('fa-angles-down','fa-angles-up');
  }
else{
html.classList.replace('fa-angles-up','fa-angles-down');
}

},1100)
}

export function changeCategory(el){

let allNav  = document.querySelectorAll('.nav-link');
for(let i of allNav){
  if(i.classList.contains('active')){
    i.classList.remove('active');
  }
}

el.classList.add('active');



let catid;
let pricechange='';
  for(let i of category){
    if(i.nameCategory == el.innerHTML.trim()){
      catid = i.id; 
    }
  }
  let html = document.querySelector('#ispisShopProduct');

  html.innerHTML ='';
  for(let i of product){
    if(catid == i.idCategory){

   pricechange = i.priceProduct.toString().replace('.', ',');
      html.innerHTML +=`

      <div class="col-4 cardProductShop">
        <div class="row">
          <div class="col-5 p-0" style="height: 140px;">
            <img src="/storage/image/${i.imageProduct}" alt="">
          </div>
          <div class="col-7">
            <h5>${i.nameProduct}</h5>
            <p>${i.descriptionProduct}</p>
          </div>
          <div class="col-9 mt-2 mb-1" style="padding-left:5px;"><span class="cenaKarticaShopS"> ${pricechange} KM</span></div>
          <div class="col-3 text-center">
            <i class="fa fa-circle-plus fa-2xl btnAddProducttoCart"></i>
          </div>
        </div>
      </div>

      `;

    }
  }

  categoryUpdateShopPage(catid);
}
if(document.querySelector('#clickWithLoad')){
   setTimeout(function (){
    document.querySelector('#clickWithLoad').click();  
    });
 }

export function categoryUpdateShopPage(catid){
  let naslov = document.querySelector('#naslovCategoryShopPage');
  let img = document.querySelector('#imgCategoryMore');
  let opis = document.querySelector('#opisCategoryShopPage');

  let c = category.find((el)=> el.id == catid);

  naslov.innerHTML = c.nameCategory;
  let imgReal = img.childNodes;
  console.log(imgReal);
  imgReal[1].src =`/storage/image/${c.imageCategory}`;
  opis.innerHTML = c.descriptionCategory;
  
}


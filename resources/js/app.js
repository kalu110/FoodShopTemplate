 // Default Laravel bootstrapper, installs axios
import './bootstrap';

 // Added: Actual Bootstrap JavaScript dependency
import 'bootstrap';

 // Added: Popper.js dependency for popover support in Bootstrap
import '@popperjs/core';

import {closeAlert, chechkifInputEmptyNav,searchCategoryInput, nazivKategorijeDuplicat, editCategory, setOldImage, getOldPhoto, setRowFirstMoveCategory, cenaProductDuplicat, 
descProductDuplicat,editProduct, setRowFirstMoveProduct, getOldPhotoProduct, setOldImageProduct, searchProductInput, changeIconFontUp, changeCategory
} from './main';
window.closeAlert = closeAlert;
window.chechkifInputEmptyNav = chechkifInputEmptyNav;
window.searchCategoryInput =searchCategoryInput;
window.nazivKategorijeDuplicat = nazivKategorijeDuplicat;
window.editCategory = editCategory;
window.setOldImage = setOldImage;
window.getOldPhoto = getOldPhoto;
window.setRowFirstMoveCategory = setRowFirstMoveCategory;
window.cenaProductDuplicat = cenaProductDuplicat;
window.descProductDuplicat = descProductDuplicat;
window.editProduct = editProduct;
window.setRowFirstMoveProduct = setRowFirstMoveProduct;
window.setOldImageProduct = setOldImageProduct;
window.getOldPhotoProduct = getOldPhotoProduct;
window.searchProductInput = searchProductInput;
window.changeIconFontUp = changeIconFontUp;
window.changeCategory = changeCategory;
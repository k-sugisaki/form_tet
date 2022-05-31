//電話番号入力
const telInput = document.getElementById('tel');

telInput.addEventListener('blur', ()=>{
  let telInputValue = telInput.value;
  telInputValue = telInputValue.replace(/[-ー―‐－]/g, '');
  const replacedValue = telInputValue.replace(/[０-９]/g,
  function(str){
    return String.fromCharCode(str.charCodeAt(0) - 0xFEE0)
  });
  telInput.value = replacedValue;
}, false);
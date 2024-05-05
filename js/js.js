function showpreview(event){
    if (event.target.files.length>0){
        var src = url.createObjectURL(event.target.files[0]);
        var preview =document.getElementById("file-1-preview");
        preview.src = src;
        preview.style.display="block";
    }
}
   
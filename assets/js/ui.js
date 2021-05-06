document.addEventListener('DOMContentLoaded',function(){
    M.AutoInit(); // auto initialize semua komponen 

    const menus = document.querySelectorAll('.side-menu');
    M.Sidenav.init(menus, {edge:'right'});

    const modalEdit = document.getElementById('modal-edit');
    var instance = M.Modal.init(modalEdit);
    instance.open();

});

document.addEventListener('DOMContentLoaded',function(){
    const modalDel = document.getElementById('modal-delete');
    var instance = M.Modal.init(modalDel);
    instance.open();
});

document.addEventListener('DOMContentLoaded',function(){
    const modalView = document.getElementById('modal-view');
    var instance = M.Modal.init(modalView);
    instance.open();
});
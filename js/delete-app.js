

document.addEventListener("DOMContentLoaded", function() {
    var btnNo = document.querySelector('.delete-no');
    var deleteApp = document.querySelector('.delete-app');
    var deleteYes = document.querySelector('.delete-yes');
  
    document.querySelectorAll(".orders-atr-but").forEach(button => {
      button.addEventListener("click", function() {
        deleteApp.classList.remove('hide-app');
        var appointmentId = this.id;
        var deleteLink = "php/delete/account-delete-appointment.php?id=" + appointmentId;
        deleteYes.href = deleteLink;
      });
    });
  
  
    
    function hideDelete() {
      deleteApp.classList.add('hide-app');
    }
  
    
    btnNo.addEventListener('click', hideDelete); 
  });
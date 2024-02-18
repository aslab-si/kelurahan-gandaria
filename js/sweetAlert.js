function Success(text) {
     Swal.fire({
        icon: "success",
        title: "Berhasil!",
        text: text,
        timer: 3000,
    });
}

function Failed(text){
     Swal.fire({
        icon: "Error",
        title: "Gagal!",
        text: text,
        timer: 3000,
    });
}

    function confirmDelete(element) {
    var text = element.dataset.text;
    var icon = element.dataset.icon;
    var path = element.dataset.path;
      Swal.fire({
        title: 'Konfirmasi Hapus Data',
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          // Handle logout di sini, misalnya dengan mengarahkan pengguna ke halaman logout
          window.location.href = path; // Gantilah dengan URL logout yang sesuai
        }
      });
    }
function confirmLogout(element) {
    var path = element.dataset.path;
      Swal.fire({
        title: 'Konfirmasi Logout',
        text: 'Apakah yakin ingin logout? ',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          // Handle logout di sini, misalnya dengan mengarahkan pengguna ke halaman logout
          window.location.href = path; // Gantilah dengan URL logout yang sesuai
        }
      });
    }

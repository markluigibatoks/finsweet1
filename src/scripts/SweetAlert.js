import Swal from 'sweetalert2';

class SweetAlert {
  constructor() {

  }

  success ({ title, text }) {
    Swal.fire({
        title,
        text,
        icon: 'success',
        confirmButtonText: 'Okay',
        customClass: {
            popup: 'bg-grey',
            title: 'font-poppins',
            htmlContainer: 'font-roboto text-primary',
            confirmButton: 'font-roboto !bg-blue uppercase !text-white',
        },
    });
  }

  error ({ title, text}) {
    Swal.fire({
        title,
        text,
        icon: 'error',
        confirmButtonText: 'Okay',
        customClass: {
            popup: 'bg-grey',
            title: 'font-poppins text-red-700 text-h5',
            htmlContainer: 'font-poppins text-black text-paragraph',
            confirmButton: 'font-poppins uppercase !bg-red-500 !text-white rounded-full px-6 py-3 hover:!bg-red-600',
        },
    });
  }
}

export default SweetAlert;
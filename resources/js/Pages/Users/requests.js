import { Inertia } from '@inertiajs/inertia'
import axios from 'axios';
import swal from 'sweetalert2'

export const DELETE_USER = (id) =>{
    new swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then(function () {
        Inertia.delete(`/admin/dashboard/users/${id}`, {
            onSuccess: () => {
               new swal({
                    title: "User Deleted!",
                    text: "The User Has Been Deleted Successfully",
                    icon: "success",
                    button: "Close",
                  });
            },
          })
    })

   
    // axios.delete('')
};
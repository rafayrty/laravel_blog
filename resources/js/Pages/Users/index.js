import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';
import * as api from './requests.js';

export default function Users(props) {
    console.log(props);


     function delete_user(e,id,index){
        e.preventDefault();
        props.users.splice(index,1);
      api.DELETE_USER(id);
    }



    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={
            <div className="top-header flex items-center justify-between">
            <h2 className="font-semibold text-xl text-gray-800 leading-tight">All Users</h2>
            <button className="mt-0 text-md shadow-md flex bg-indigo-500 hover:bg-indigo-600 hover:shadow-none transition duration-200 ease-in-out text-white font-bold py-2 px-4 rounded items-center">
                <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
</svg></span>
                Add New User</button>
            </div>
            }
        >
          
                


            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    
             
                        <div className="flex flex-col">
  <div className="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div className="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div className="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table className="min-w-full table-auto	 divide-y divide-gray-200">
          <thead className="bg-gray-50">
            <tr>
              <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Info
              </th>
              <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              {/* <th scope="col" className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th> */}
              <th scope="col" className="relative px-6 py-3">
                <span className="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody className="bg-white divide-y divide-gray-200">
          {props.users.map((user,index)=>{


            return (
            <tr key={user.id}>
              <td className="px-6 py-4 whitespace-nowrap">
                <div className="flex items-center">
                  <div className="flex-shrink-0 h-10 w-10">
                    <img className="h-10 w-10 rounded-full" src={user.image==='' ? `https://ui-avatars.com/api/?name=${user.name}`: user.image} alt="" />
                  </div>
                  <div className="ml-4">
                    <div className="text-sm font-medium text-gray-900">
                    {user.name}
                    </div>
                    <div className="text-sm text-gray-500">
                        {user.email}
                    </div>
                  </div>
                </div>
              </td>

              <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {user.info.substr(0,window.innerWidth*70 / 1366)}...
              </td>
              <td className="px-6 py-4 whitespace-nowrap">
                <span className="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                 {user.status ? 'Active' : 'UnActive'}
                </span>
              </td>
              {/* <td className="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Admin
              </td> */}
              <td className="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="#" className="text-indigo-600 hover:text-indigo-900">Edit</a>
   
               {user.id!==props.auth.user.id ? <a href="#" onClick={(e)=>delete_user(e,user.id,index)} className="text-red-600 hover:text-red-900 ml-6">Delete</a> : ""}
               

              </td>
            </tr>
            );
            })}
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
                    
                    </div>
                </div>
            </div>
        </Authenticated>
    );
}

@extends('admin.deshboard')
@section('home')
<div class="w-full px-6 py-6 mx-auto">
            <!-- row 1 -->
           
            <!-- cards row 2 -->
            
            <!-- cards row 3 -->
            <div class="flex flex-wrap mt-6 -mx-3">
               <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-8/12 lg:flex-none">
                  <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl dark:bg-gray-950 border-black-125 rounded-2xl bg-clip-border">
                     <div class="p-4 pb-0 mb-0 rounded-t-4">
                        <div class="flex justify-between">
                           <h6 class="mb-2 dark:text-white">Sales by Country</h6>
                        </div>
                     </div>
                     <div class="overflow-x-auto">
                        <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 dark:border-white/40">
                           <tbody>
                              <tr>
                                 <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-2 py-1">
                                       <div>
                                          <img src="./assets/img/icons/flags/US.png" alt="Country flag" />
                                       </div>
                                       <div class="ml-6">
                                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:</p>
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">United States</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">2500</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">$230,900</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">29.9%</h6>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-2 py-1">
                                       <div>
                                          <img src="./assets/img/icons/flags/DE.png" alt="Country flag" />
                                       </div>
                                       <div class="ml-6">
                                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:</p>
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Germany</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">3.900</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">$440,000</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">40.22%</h6>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
                                    <div class="flex items-center px-2 py-1">
                                       <div>
                                          <img src="./assets/img/icons/flags/GB.png" alt="Country flag" />
                                       </div>
                                       <div class="ml-6">
                                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:</p>
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Great Britain</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">1.400</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">$190,700</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
                                    <div class="flex-1 text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">23.44%</h6>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
                                    <div class="flex items-center px-2 py-1">
                                       <div>
                                          <img src="./assets/img/icons/flags/BR.png" alt="Country flag" />
                                       </div>
                                       <div class="ml-6">
                                          <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Country:</p>
                                          <h6 class="mb-0 text-sm leading-normal dark:text-white">Brasil</h6>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Sales:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">562</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Value:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">$143,960</h6>
                                    </div>
                                 </td>
                                 <td class="p-2 text-sm leading-normal align-middle bg-transparent border-0 whitespace-nowrap">
                                    <div class="flex-1 text-center">
                                       <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-60">Bounce:</p>
                                       <h6 class="mb-0 text-sm leading-normal dark:text-white">32.14%</h6>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               
            </div>
           
@endsection
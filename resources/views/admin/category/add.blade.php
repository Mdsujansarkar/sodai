@extends('admin.deshboard')
@section('home')
<div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
          <div class="w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
              <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                <div class="flex items-center">
                  <p class="mb-0 dark:text-white/80">{{ __('Categories') }}</p>
                  <button type="button" class="inline-block px-8 py-2 mb-4 ml-auto font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer text-xs tracking-tight-rem hover:shadow-xs hover:-translate-y-px active:opacity-85">{{ __('ADD +') }}</button>
                </div>
              </div>
              <div class="flex-auto p-6">
                <p class="leading-normal uppercase dark:text-white dark:opacity-60 text-sm">Categories Information</p>
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="Name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Name<span style="color:red">*</span></label>
                      <input type="text" name="username" value="lucky.jesse" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="email" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Visible In Menu<span style="color:red">*</span></label>
                      <input type="email" name="email" value="jesse@example.com" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="first name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Position<span style="color:red">*</span></label>
                      <input type="text" name="first name" value="Jesse" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                  <div class="w-full max-w-full px-3 shrink-0 md:w-6/12 md:flex-0">
                    <div class="mb-4">
                      <label for="last name" class="inline-block mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-white/80">Slug<span style="color:red">*</span></label>
                      <input type="text" name="last name" value="Lucky" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none" />
                    </div>
                  </div>
                </div>
                <div class="flex flex-wrap -mx-3">
                  <div class="w-full max-w-full px-3 shrink-0 md:w-full md:flex-0">
                    <div class="mb-4">
                      <button type="button" class="focus:shadow-primary-outline dark:bg-slate-850 dark:text-white text-sm leading-5.6 ease block w-full text-white appearance-none rounded-lg border border-solid border-gray-300 bg-blue-500 bg-clip-padding px-3 py-2 font-normal outline-none transition-all placeholder:text-white-500 focus:border-blue-500 focus:outline-none" >{{ __('Save') }}</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
           
@endsection

<div  >
<div class="" >
    <x-label for="department_id" :value="$lablename" />

    <select  class="hidden" id="{{$id}}">
        @foreach ($items as $item)

        <option

    @if(isset($selected) && in_array($item->id,$selected))
   selected
    @endif
     value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>


<div x-data="dropdown()" x-init="loadOptions('{{$id}}')" class="flex flex-col items-center w-full mx-auto h-1/3">
      <input  name="{{$inputname}}" type="hidden" wire:model='selectedParts' x-on:change='alert("change")'  x-bind:value='selectedValues()'    />

      <input type="hidden" name="" x-model='selected'>
      <div class="relative inline-block w-64">
          <div class="relative flex flex-col items-center">
              <div x-on:click="open" class="w-full ">
                  <div class="flex p-1 my-2 bg-white border border-gray-200 rounded dark:border-m_primary dark:bg-dark ">
                      <div class="flex flex-wrap flex-auto dark:bg-dark">
                          <template x-for="(option,index) in selected" :key="options[option].value">
                              <div
                                  class="flex items-center justify-center px-2 py-1 m-1 font-medium rounded-full bg-m_primary ">
                                  <div class="flex-initial max-w-full font-normal leading-none"
                                   x-model="options[option]" x-text="options[option].text"></div>
                                  <div class="flex flex-row-reverse flex-auto">
                                      <div x-on:click="remove(index,option)">
                                          <svg class="w-6 h-6 fill-current " role="button" viewBox="0 0 20 20">
                                              <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                         c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                         l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                         C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                          </svg>

                                      </div>
                                  </div>
                              </div>
                          </template>
                          <div x-show="selected.length    == 0" class="flex-1">
                              <input placeholder="Select a option"
                                  class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none"
                                  x-bind:value="selectedValues()"
                              >
                          </div>
                      </div>
                      <div
                          class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 border-l border-gray-200 svelte-1l8159u">

                          <button type="button" x-show="isOpen() === true" x-on:click="open"
                              class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                              <svg version="1.1" class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                  <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
  c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
  L17.418,6.109z" />
                              </svg>

                          </button>
                          <button type="button" x-show="isOpen() === false" @click="close"
                              class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                              <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                  <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
  c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
  " />
                              </svg>

                          </button>
                      </div>
                  </div>
              </div>
              <div class="w-full px-4">
                  <div x-show.transition.origin.top="isOpen()"
                      class="absolute z-40 w-full overflow-y-auto bg-white rounded shadow top-100 lef-0 h-80 svelte-5uyqqj"
                      x-on:click.away="close">
                      <div class="flex flex-col w-full dark:bg-dark">
                          <template x-for="(option,index) in options" :key="index">
                              <div>
                                  <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-teal-100"
                                      @click="select(index,$event)">
                                      <div x-bind:class="option.selected ? 'border-teal-600' : ''"
                                          class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                          <div class="flex items-center w-full">
                                              <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </template>
                      </div>
                  </div>
              </div>
          </div>
          <!-- on tailwind components page will no work  -->
      </div>

      @if (isset($searching) && $searching==true)
      <button class="inline-flex p-2 mx-auto text-white bg-blue-800 rounded-md" x-on:click='$wire.set("selectedParts",selectedValues()) '>  تنفيذ</button>
      @endif

</div>





                </div>


        <script>

            console.log('{{$lablename}}');
            function dropdown() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() { this.show = true },
                    close() { this.show = false },
                    isOpen() { return this.show === true },
                    select(index, event) {

                        if (!this.options[index].selected) {

                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);

                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);


                    },
                    loadOptions(id) {
                        const options = document.getElementById(id).options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                            });
                        }
                        console.log(options);

                        for (let i = 0; i < options.length; i++) {
                            if(options[i].getAttribute('selected') != null)
                            this.selected.push(i);
                        }


                    },
                    selectedvalue:new Array(),
                    selectedValues(){


                        return this.selected.map((option)=>{
                            this.selectedvalue.push( this.options[option].value);
                            return this.options[option].value;
                        })
                    }
                }
            }
        </script>
</div>

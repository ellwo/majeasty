
    {{--    <div  id="ratingmodale"
             x-data="{openmodal:{{$open}}}"
             :class="{'opacity-100 visible modal-open': openmodal}"
             class="modal  mx-auto"
              wire:ignore
        >

            <div class="modal-box bg-white">

                <div class="dialog-header">
                    <a   @click="openmodal=false" class="btn btn-light btn-sm btn-icon" aria-label="Close" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
                </div>
                <form  wire:submit.prevent="ratepro">

                <div x-data="    {
    rating: 0,
		hoverRating: 0,
		ratings: [{'amount': 1, 'label':'Terrible'}, {'amount': 2, 'label':'Bad'}, {'amount': 3, 'label':'Okay'}, {'amount': 4, 'label':'Good'}, {'amount': 5, 'label':'Great'}],
		rate(amount) {
			if (this.rating == amount) {
        this.rating = 0;
      }
			else this.rating = amount;
		},
	 currentLabel() {
       let r = this.rating;

      if (this.hoverRating != this.rating) r = this.hoverRating;
      let i = this.ratings.findIndex(e => e.amount == r);
      if (i >=0) {return this.ratings[i].label;} else {return ''}
    },
    	 currentValue() {
       let r = this.rating;
      if (this.hoverRating != this.rating) r = this.hoverRating;
      let i = this.ratings.findIndex(e => e.amount == r);
      if (i >=0) {return this.ratings[i].amount;} else {return ''}
    }
	}" class="flex flex-col items-center justify-center space-y-2 rounded m-2 w-72 h-56 p-3 bg-gray-200 mx-auto">


                    <div class="flex mb-2">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">{{__('ملاحظات')}}</label>
                        <textarea  wire:model="comment"  class="py-1 px-1  dark:text-black rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 py-4 text-black focus:ring-blue-900 focus:border-transparent" rows="2" >
                    </textarea>
                    </div>
                    <input type="hidden" wire:model.lazy="reatvalue" :value="currentValue()"/>

                    <div class="flex space-x-0 bg-gray-100">
                        <template x-for="(star, 5) in ratings" :key="index">
                            <button type="button" @click="rate(star.amount)" @mouseover="hoverRating = star.amount" @mouseleave="hoverRating = rating"
                                    aria-hidden="true"
                                    :title="star.label"
                                    class="rounded-sm text-yellow-400 fill-current focus:outline-none focus:shadow-outline p-1 w-12 m-0 cursor-pointer"
                                    :class="{'text-yellow-400': hoverRating >= star.amount, 'text-yellow-400': rating >= star.amount && hoverRating >= star.amount}">
                                <svg class="w-15 transition duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </button>

                        </template>
                    </div>
                    <div class="p-2 ">
                        <div x-if="rating || hoverRating">
                            <input type="hidden" wire:model="reatvalue" :value="currentValue()"/>

                            <input type="submit" class="text-xl btn btn-ghost text-center bg-blue-900 text-white rounded-lg" :value="'قيم'+currentLabel()"/>
                            <input type="text" hidden  :value="currentValue()">

                        </div>
                        <template x-if="!rating && !hoverRating">

                        </template>
                    </div>

                </div>
                </form>
            </div>

        </div>--}}

    <section class="w-full  px-8 pt-4 pb-10 xl:px-8">





        @if($hideForm != true)
        <form     wire:submit.prevent="ratepro" >
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="flex space-x-1 rating">

                @for($i=1; $i<=5; $i++)

                    <label for="star{{$i}}">
                        <input hidden wire:model="rating" class="hidden" type="radio" id="star{{$i}}" name="rating" value="{{$i}}" />
                        <svg class="cursor-pointer  block w-8 h-8 @if($rating >= $i ) text-yellow-400 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </label>
                @endfor
            </div>

            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">comment</h2>
            <div class="w-full md:w-full px-3 mb-2 mt-2">
                <textarea wire:model.lazy="comment" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Type Your Comment' required></textarea>
            </div>
            <div class="w-full md:w-full flex items-start md:w-full px-3">
                <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                    <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p class="text-xs md:text-sm pt-px"></p>
                </div>
                <div class="-mr-1">
                    <button type="submit" class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" >
                        Post Comment</button>
                </div>
            </div>
        </div>
        </form>
        @else

            @guest
            <div>
                <div class="mb-8 text-center text-gray-600">
                    You need to login in order to be able to rate the product!
                </div>
                <a href="/register"
                   class="block px-5 py-2 mx-auto font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100"
                >Register</a>
            </div>

                @else
                <div class="mb-8 text-center text-gray-600">
                    @if (session()->has('message'))
                        <p class="text-xl text-gray-600 md:pr-16">
                            {{ session('message') }}
                        </p>
                    @endif
                                    </div>

            @endguest
        @endif






{{--
 <div class="max-w-5xl mx-auto relative">
            <div wire:loading class="absolute w-full top-0 bottom-0 z-30 bg-opacity-50 bg-gray-300 h-full">
                <button class="btn loading mx-auto my-auto text-blue-500  btn-circle btn-lg bg-base-200 btn-ghost"></button>
            </div>
            <div class="flex flex-col items-center md:flex-row">

                <div class="w-full mt-16 md:mt-0">
                    <div class="relative z-10 h-auto p-4 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        @auth
                            <div class="w-full space-y-5">
                                <p class="font-medium text-blue-500 uppercase">
                                    Rate this product
                                </p>
                            </div>
                            @if (session()->has('message'))
                                <p class="text-xl text-gray-600 md:pr-16">
                                    {{ session('message') }}
                                </p>
                            @endif

                            @if($hideForm != true)
                                <form wire:submit.prevent="ratepro()">
                                    <div class="block max-w-3xl px-1 py-2 mx-auto">
                                        <div class="flex space-x-1 rating">

                                            @for($i=1; $i<=5; $i++)

                                                <label for="star{{$i}}">
                                                    <input hidden wire:model="rating" class="hidden" type="radio" id="star{{$i}}" name="rating" value="{{$i}}" />
                                                    <svg class="cursor-pointer  block w-8 h-8 @if($rating >= $i ) text-yellow-400 @else text-grey @endif " fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                                </label>
                                                @endfor
                                        </div>
                                        <div class="my-5">
                                            @error('comment')
                                            <p class="mt-1 text-red-500">{{ $message }}</p>
                                            @enderror
                                            <textarea wire:model.lazy="comment" name="description" class="block w-full px-4 py-3 border border-2 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Comment.."></textarea>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <button type="submit" class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg">Rate</button>
                                        @auth
                                            @if($currentId)
                                                <button type="submit" class="w-full px-3 py-4 mt-4 font-medium text-white bg-red-400 rounded-lg" wire:click.prevent="delete({{ $currentId }})" class="text-sm cursor-pointer">Delete</button>
                                            @endif
                                        @endauth
                                    </div>
                                </form>
                            @endif
                        @else
                            <div>
                                <div class="mb-8 text-center text-gray-600">
                                    You need to login in order to be able to rate the product!
                                </div>
                                <a href="/register"
                                   class="block px-5 py-2 mx-auto font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100"
                                >Register</a>
                            </div>
                        @endauth
                    </div>
                </div>

            </div>
        </div>

--}}

    </section>

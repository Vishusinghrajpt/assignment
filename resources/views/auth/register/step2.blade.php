<div class="join-as row justify-center main-row">
    <div class="w-full mb-6">
        <h2 class="font-bold text-xl">Profileinstellungen</h2>
    </div>
    <div class="w-full border border-gray-300 p-4 mb-6">
        <div class="profile-img p-2 flex items-center justify-center">
            <div class="profile-img-btn" onclick="inputclick('#u-profile')"></div>
            <div class="alert alert-danger profile_picture_error py-2 mt-2 hidden"></div>
        </div>
        <input type="file" id="u-profile" onchange="readImage('.profile-img-btn','profile_p');" name="u-profile" class="hidden"/>
        <div class="mb-4">
            <label for="rate" class="block text-gray-600 mb-1 font-medium">Tägliche Rate</label>
            <input id="rate" type="number" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('rate') border border-red-500 @enderror" name="rate" placeholder="€" value="">
        </div>
        <div class="mb-4">
            <label for="title" class="block text-gray-600 mb-1 font-medium">Titel</label>
            <input type="text" class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('title') border border-red-500 @enderror" name="title" placeholder="Wie wollen Sie gefunden werden?" value="">
        </div>
    </div>
    <div class="w-full border border-gray-300 p-4 mb-6">
        <div class="mb-4">
            <label for="branches" class="block text-gray-600 mb-1 font-medium">Bereich</label>
            <div class="flex items-center justify-between">
                <div class="w-1/2 pr-2">
                    <span class="block text-gray-600">Branche:</span>
                </div>
                <div class="w-1/2">
                    <select class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('branches') border border-red-500 @enderror" id="branches" data-live-search="true" name="branches[]" multiple>
                        @php /*
                        @foreach($branches ?? [] as $branch)
                            <option id="b_option{{$branch->id}}" value="{{$branch->id}}">{{$branch->name}}</option>
                        @endforeach
                        */
                        @endphp
                    </select>
                </div>
            </div>
            <div class="selected_branches py-3"></div>
        </div>
        <div class="mb-4">
            <div class="flex items-center justify-between">
                <div class="w-1/2 pr-2">
                    <span class="block text-gray-600">Gesuchte Stellen:</span>
                </div>
                <div class="w-1/2">
                    <select class="form-input w-full bg-gray-100 text-gray-600 placeholder-gray-400 px-4 py-3 rounded-none @error('jobs') border border-red-500 @enderror" name="jobs[]" data-live-search="true" id="">
                        <!-- Options should be populated here -->
                    </select>
                </div>
            </div>
            <div class="selected_jobs py-3 flex flex-wrap"></div>
        </div>
    </div>
    <div class="w-full flex justify-center pt-3">
        <p class="text-gray-600 text-sm">** Dein Profil wird überprüft bevor es aktiviert wird. **</p>
    </div>
    <div class="w-full my-3">
        <button id="setupId-btn" class="bg-primary text-white py-2 px-4 rounded w-full border-primary border transition-shadow duration-300 shadow-md hover:shadow-lg hover:bg-primary-hover">
            {{ __('Continue') }}
        </button>
    </div>
    <button type="button" class="block text-gray-600 mb-1 font-semibold text-sm text-left">Go Back</label></button>
</div>

@push('js')
    <script type="text/javascript">

    </script>
@endpush

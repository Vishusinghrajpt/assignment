<div class="join-as row justify-center main-row">
    <div class="col-10 mb-6">
        <h2 class="text-2xl font-bold text-left w-full mb-6 tracking-wide">Beitreten als</h2>
        <p class="block text-gray-600 mb-1 font-medium">Lorem Ipsum dolor sit amet quis</p>
    </div>
    <div class="col-10 border border-gray-300 p-4 mb-6">
        <label class="radio-button flex flex-col items-start cursor-pointer">
            <input type="radio" name="join_as" value="freelancer" class="sr-only peer">
            <div class="flex items-center">
                <div class="w-6 h-6 pl-0.5 pt-0.5 mr-2 rounded-full border border-primary flex items-center justify-center text-primary peer-checked:bg-primary">
                    <svg class="w-4 h-4 text-primary fill-current pointer-events-none hidden peer-checked:block" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                    </svg>
                </div>
                <span class="text-gray-600 font-medium ml-3">Freelancer</span>
            </div>
            <p class="ms-11 mt-4">
                Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur
            </p>
            <div id="entlohnungsart" class="form-control flex items-center mt-4 hidden peer-checked:flex">
                <div class="border border-slate-300 bg-white py-3 px-4 w-full flex items-center shadow-md">
                    <label for="" class="text-nowrap mr-4">Entlohnungsart:</label>
                    <div class="flex items-center min-w-[170px]">
                        {{ html()->select('remuneration', $remunerations, $params['remuneration'] ?? '')->class(['border-none !py-0 !w-full !pr-0']) }}
                    </div>
                </div>
            </div>
        </label>
    </div>
    <div class="col-10 border border-gray-300 p-4 mb-6">
        <label class="radio-button flex flex-col items-start cursor-pointer">
            <input type="radio" name="join_as" value="employer" class="sr-only peer">
            <div class="flex items-center">
                <div class="w-6 h-6 pl-0.5 pt-0.5 mr-2 rounded-full border border-primary flex items-center justify-center text-primary peer-checked:bg-primary">
                    <svg class="w-4 h-4 text-primary fill-current pointer-events-none hidden peer-checked:block" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                    </svg>
                </div>
                <span class="text-gray-600 font-medium ml-3">Firma</span>
            </div>
            <p class="ms-11 mt-4">
                Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur
            </p>
        </label>
    </div>
    <div class="col-10 border border-gray-300 p-4 mb-6">
        <label class="radio-button flex flex-col items-start cursor-pointer">
            <input type="radio" name="join_as" value="employee" class="sr-only peer">
            <div class="flex items-center">
                <div class="w-6 h-6 pl-0.5 pt-0.5 mr-2 rounded-full border border-primary flex items-center justify-center text-primary peer-checked:bg-primary">
                    <svg class="w-4 h-4 text-primary fill-current pointer-events-none hidden peer-checked:block" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                    </svg>
                </div>
                <span class="text-gray-600 font-medium ml-3">Angestellter</span>
            </div>
            <p class="ms-11 mt-4">
                Neque porro quisquam est, qui dolorem ipsum
                quia dolor sit amet, consectetur
            </p>
        </label>
    </div>
    <div class="col-10">
        <div>
            <button type="submit" class="bg-primary text-white py-2 px-4 rounded w-full border-primary border transition-shadow duration-300 shadow-md hover:shadow-lg hover:bg-primary-hover">Weiter</button>
        </div>
    </div>
</div>

@push('js')
    <script type="text/javascript">
        document.querySelectorAll('.radio-button input[type="radio"]').forEach(function(radio) {
            radio.addEventListener('click', function() {
                document.querySelectorAll('.radio-button').forEach(function(item) {
                    item.classList.remove('checked');
                });
                this.closest('.radio-button').classList.add('checked');

                // Show/hide the entlohnungsart dropdown
                if (this.value === 'freelancer') {
                    document.getElementById('entlohnungsart').classList.remove('hidden');
                } else {
                    document.getElementById('entlohnungsart').classList.add('hidden');
                }
            });
        });
    </script>
@endpush

<section class="container mx-auto my-6">
    <div
        class="bg-blue-800 text-white rounded p-4 flex items-center justify-between flex-col md:flex-row gap-4"
    >
        <div>
            <h2 class="text-xl font-semibold">Ready to recruit?</h2>
            <p class="text-gray-200 text-lg mt-2">
                Share your job listing today and connect with the perfect candidate.
            </p>
        </div>
        <a
            href="{{ route('jobs.create') }}"
            class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded hover:shadow-md transition duration-300"
        >
            <i class="fa fa-edit"></i> Create Job
        </a>
    </div>
</section>
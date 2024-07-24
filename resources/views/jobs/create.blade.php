<x-layout>
    <page-heading>New Job</page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name='title' placeholder="CEO" />
        <x-forms.input label="Salary" name='salary' placeholder="$90,000 USD" />
        <x-forms.input label="Location" name='location' placeholder="Winter park, Florida" />
        <x-forms.select label="Schedule" name='schedule'>
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>
        <x-forms.input label="URL" name='url' placeholder="https://pixel-position.com/jobs/create" />
        <x-forms.checkbox label="Feature (Cost Extra)" name='featured' />
        <x-forms.divider />
        <x-forms.input label="Tags (comma seperated)" name='tags' placeholder="laracasts , videos , california" />
        <x-forms.button>Publish</x-forms.button>



    </x-forms.form>
</x-layout>

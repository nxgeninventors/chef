{{-- 
    Forms

    https://tailwindui.com/components/application-ui/forms/form-layouts
    
    Dashboard Layout

    https://tailwindcomponents.com/component/admin-dashboard-along-with-dark-mode-responsive-sidebar-7


    https://tailwindui.com/components/application-ui/data-display/description-lists

    https://tailwindui.com/components/application-ui/forms/sign-in-forms
    https://tailwindui.com/components/application-ui/forms/select-menus
    https://tailwindui.com/components/application-ui/navigation/navbars
    https://tailwindui.com/components/application-ui/navigation/pagination
    https://tailwindui.com/components/application-ui/overlays/modals
    https://tailwindui.com/components/application-ui/overlays/slide-overs
    https://tailwindui.com/components/application-ui/elements/avatars
    https://tailwindui.com/components/application-ui/elements/dropdowns
    
--}}

<x-app-layout>
    <div class="mt-10 sm:mt-0 mx-auto p-4 sm:p-6 lg:p-8">
        @include('partials.forms.form-1')
        @include('partials.break-line')
        @include('partials.forms.form-2')
        @include('partials.break-line')
        @include('partials.forms.form-3')
    </div>
</x-app-layout>

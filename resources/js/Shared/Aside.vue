<template>

    <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside" @mouseover="hover" @mouseleave="hoverEnd">

        <div class="brand flex-column-auto" id="kt_brand">
            <a :href="route('home')" v-if="showIcon">
                <Logo  width="40"/>
            </a>

            <Icon  />

        </div>

        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

            <div class="header-logo">
                <a :href="route('home')">
                </a>
            </div>


            <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                <!--begin::Menu Nav-->
                <ul class="menu-nav">

                    <MenuItem @click="closeAside" routeName="home" :name="$t('aside.dashboard')" :active="$page.component == 'Dashboard'">
                        <span class="svg-icon menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                    </MenuItem>

                    <MenuSection :name="$t('aside.adminActions')" />

                    <MenuItem @click="closeAside" routeName="users.show" :route-data="{user: $page.props.auth.user}" :name="$t('aside.myAccount')" :active="$page.component == 'Users/Show' || ($page.component == 'Users/Edit' && $page.props.user.id == $page.props.auth.user.id)">
                        <i class="menu-icon   far fa-user-circle  icon-md"></i>
                    </MenuItem>




                        <MenuItem @click="closeAside" :active="$page.component == 'Roles/Index'" :name="$t('aside.manageRoles')" routeName="roles.index">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>


                                <!--end::Svg Icon-->
                            </span>
<!--                            <template #subMenu>-->
<!--                                <SubMenu :active-sub-menu="$page.component == 'Roles/Index'" name="Roles List" route-name="roles.index"/>-->
<!--                                <SubMenu  name="New Role" route-name="roles.create"/>-->
<!--                            </template>-->
                        </MenuItem>


                    <MenuItem :name="$t('aside.manageUsers')" :hasSubmenu="true" :active="$page.component == 'Users/Index' || $page.component == 'Users/Create'">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5" />
                                        <rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5" />
                                    </g>
                                </svg>

                                <!--end::Svg Icon-->
                            </span>
                        <template #subMenu>
                                <SubMenu @click="closeAside" :name="$t('aside.usersList')" :active-sub-menu="$page.component == 'Users/Index'" route-name="users.index" parent-name="Manage Users"/>
                                <SubMenu @click="closeAside" :name="$t('aside.newUser')" :active-sub-menu="$page.component == 'Users/Create'" route-name="users.create" parent-name="Manage Users"/>
                        </template>
                        </MenuItem>

                    <MenuSection :name="$t('aside.generalSettings')" />

                    <MenuItem :name="$t('aside.appSettings')" :hasSubmenu="true" :active="$page.component == 'Settings/Edit'">
                            <span class="svg-icon menu-icon">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3" />
                                        <polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19" />
                                        <polygon fill="#000000" points="11 19 15 14 19 19" />
                                        <path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3" />
                                    </g>
                                </svg>

                                <!--end::Svg Icon-->
                            </span>
                            <template #subMenu>
                                <SubMenu @click="closeAside" #subMenu :name="$t('aside.changeSettings')" :active-sub-menu="$page.component == 'Settings/Edit'" route-name="settings.edit" :route-params="this.$page.props.settings"  parent-name="Application Settings"/>
                            </template>
                    </MenuItem>


                </ul>
                <!--end::Menu Nav-->
            </div>

        </div>
    </div>
    <div class="aside-overlay d-none" @click="closeAside"></div>

</template>

<script>
import Icon from "@/components/Aside/Icon.vue";
import Logo from "@/components/Aside/Logo.vue";
import MenuItem from "@/components/Aside/MenuItem.vue";
import MenuSection from "@/components/Aside/MenuSection.vue";
import SubMenu from "@/components/Aside/SubMenu.vue";
export default {
    name: "Aside",
    components: { SubMenu, MenuSection, Icon , Logo, MenuItem},
    data(){
        return{
            showIcon:true,
        }
    },
    methods:{
        hover(){
            if($('#kt_body').hasClass('aside-minimize')){
                $('#kt_body').addClass('aside-minimize-hover')
                this.showIcon = true
            }

        },
        hoverEnd(){
            if($('#kt_body').hasClass('aside-minimize')){
                $('#kt_body').removeClass('aside-minimize-hover')
                this.showIcon = false
            }

        },
        closeAside(){
            setTimeout(() => {
                $('#kt_aside').removeClass('aside-on')
                $('.aside-overlay').addClass('d-none')
            },500)
        }
    },
    mounted() {

    },
    computed:{

    },
    watch:{

    }


}
</script>

<style scoped>

</style>

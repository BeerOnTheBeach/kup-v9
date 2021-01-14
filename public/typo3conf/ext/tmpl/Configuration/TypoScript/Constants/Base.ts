page {
    logo {
        # cat=bootstrap package: logo/110/100; type=string; label=Logo: Leave blank to use website title from template instead
        file = EXT:tmpl/Resources/Public/Images/logo.png
        # cat=bootstrap package: logo/110/110; type=string; label=Logo Inverted: Leave blank to use website title from template instead
        fileInverted = EXT:tmpl/Resources/Public/Images/logo.png
        # cat=bootstrap package: logo/110/120; type=int+; label=Height: The image will not be resized!
        height = 300
        # cat=bootstrap package: logo/110/130; type=int+; label=Width: The image will not be resized!
        width = 450
    }
    theme {
        navigation {
            # cat=bootstrap package: navigation/151/100; type=options[Default=default, Default Transition=default-transition, Inverse=inverse, Inverse Transition=inverse-transition]; label=Navigation Style
            style = default
            # cat=bootstrap package: navigation/151/101; type=options[Default=, Fixed Top=top, Fixed Bottom=bottom]; label=Navigation Type
            type =
            icon {
                # cat=bootstrap package: navigation/151/102; type=boolean; label=Navigation Icon Enable
                enable = 1
                # cat=bootstrap package: navigation/151/103; type=int+; label=Navigation Icon Width
                width = 20
                # cat=bootstrap package: navigation/151/104; type=int+; label=Navigation Icon Height
                height = 20
            }
            dropdown {
                icon {
                    # cat=bootstrap package: navigation/151/105; type=boolean; label=Dropdown Icon Enable
                    enable = 1
                    # cat=bootstrap package: navigation/151/106; type=int+; label=Dropdown Icon Width
                    width = 16
                    # cat=bootstrap package: navigation/151/107; type=int+; label=Dropdown Icon Height
                    height = 16
                }
            }
        }

        subnavigation {
            icon {
                # cat=bootstrap package: navigation/152/108; type=boolean; label=SubNavigation Icon Enable
                enable = 1
                # cat=bootstrap package: navigation/152/109; type=int+; label=SubNavigation Icon Width
                width = 16
                # cat=bootstrap package: navigation/152/110; type=int+; label=SubNavigation Icon Width
                height = 16
            }
        }

        breadcrumb {
            # cat=bootstrap package: navigation/162/breadcrumb_enable; type=boolean; label=Breadcrumb: Enable to display the breadcrumb
            enable = 1
            # cat=bootstrap package: navigation/162/breadcrumb_enableLevel; type=int+; label=Breadcrumb Enable Level: Enable breadcrumb menu is greater or equal this value
            enableLevel = 2
            icon {
                # cat=bootstrap package: navigation/162/breadcrumb_icon_enable; type=boolean; label=Breadcrumb Icon: Enable navigation icons in the breadcrumb
                enable = 0
                # cat=bootstrap package: navigation/162/breadcrumb_icon_width; type=int+; label=Breadcrumb Icon Width
                width = 16
                # cat=bootstrap package: navigation/162/breadcrumb_icon_height; type=int+; label=Breadcrumb Icon Height
                height = 16
            }
        }

        language {
            # cat=bootstrap package: language/168/language_enable; type=boolean; label=LanguageSection: Enable to display the LanguageSection at bottom
            enable = 0
        }

        copyright {
            # cat=bootstrap package: copyright/169/120; type=boolean; label=Copyright: Enable to display the copyright
            enable = 0
            # cat=bootstrap package: copyright/169/121; type=string; label=Copyright Text
            text = Running with <a href="http://www.typo3.org" rel="noopener" target="_blank">TYPO3</a> and <a href="https://www.bootstrap-package.com" rel="noopener" target="_blank">Bootstrap Package</a>.
        }
    }
}
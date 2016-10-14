set tabstop=4
set shiftwidth=4

let g:syntastic_php_checkers=['php', 'phpcs', 'phpmd']
let g:syntastic_php_phpcs_args='--standard=PSR2 -n'

let g:ctrlp_custom_ignore = '\.git$\|vendor$\|var$\|docker$\'

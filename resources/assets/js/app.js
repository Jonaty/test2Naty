 function activeMenu($url)
 {
 	return request()->is($url) ? 'text-danger' : '';
 }
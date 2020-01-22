/**
* Modify login to accept username and email.
*
*/

public function login() {
  $login = $request->input('identity');
  $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
  request()->merge([$field => $login]);
  return $field;
}

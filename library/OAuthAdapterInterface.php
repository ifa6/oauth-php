<?php

interface OAuthAdapterInterface {

	public function hasIdentity();

	public function getIdentity();

	public function authenticate($identity, $password);

}

<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}

# post
#   - texts (1:1)
#   - tags (*:*)
#   ~ users (*:1)
#   ~ images (poly)
#
# users
#   - posts (1:*)
#   ~ images (poly)
#
# images
#   - posts (poly)
#   - users (poly)

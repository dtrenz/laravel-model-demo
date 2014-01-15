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
#   - categories (1:*)
#   - tags (*:*)
#   - images (poly)
#   - comments (1:*)
#
# users
#   - comments (1:*)
#   - images (poly)

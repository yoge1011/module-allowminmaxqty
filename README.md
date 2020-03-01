# Magento 2.x Extension | Yogendra_AllowedMinMaxQty

    ``yoge1011/module-allowedminmaxqty``

## Installation
\* = in production please use the `--keep-generated` option

 - Unzip the zip file in `app/code/Yogendra/AllowedMinMaxQty`
 - Enable the module by running `php bin/magento module:enable Yogendra_AllowedMinMaxQty`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enable [Yes/No] (allowedminmaxqty/general_settings/enable)

 - Type [Store Wise/Product Wise] (allowedminmaxqty/general_settings/type)

 - Minimum Allowed Qty (allowedminmaxqty/general_settings/min_allowed_qty)

 - Maximum Allowed Qty (allowedminmaxqty/general_settings/max_allowed_qty)


## Screenshots

<img src="https://i.ibb.co/7SfyyX6/Selection-085.png" alt="Minimum Allowed" title="Minimum Allowed">

<img src="https://i.ibb.co/XYMLqKC/Selection-086.png" alt="Maximum Allowed" title="Maximum Allowed">


## Prerequisites

### Use the following table to verify you have the correct prerequisites to install this Extension.

<table>
	<tbody>
		<tr>
			<th>Prerequisite</th>
			<th>How to check</th>
			<th>For more information</th>
		</tr>
	<tr>
		<td>Apache 2.2 or 2.4</td>
		<td>Ubuntu: <code>apache2 -v</code><br>
		CentOS: <code>httpd -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/apache.html">Apache</a></td>
	</tr>
	<tr>
		<td>PHP 7.1.x or higher</td>
		<td><code>php -v</code></td>
		<td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/php-ubuntu.html">PHP Ubuntu</a><br><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/php-centos.html">PHP CentOS</a></td>
	</tr>
	<tr>
      <td>MySQL 5.6.x</td>
	   <td><code>mysql -u [root user name] -p</code></td>
	   <td><a href="http://devdocs.magento.com/guides/v2.0/install-gde/prereq/mysql.html">MySQL</a></td>
	</tr>
   <tr>
      <td>Magento 2.x</td>
	   <td><code>bin/magento --version</code></td>
	   <td><a href="https://devdocs.magento.com">Magento</a></td>
	</tr>
</tbody>
</table>

## Feedback and Support

 - <a href="https://yoge1011.github.io/">https://yoge1011.github.io</a>

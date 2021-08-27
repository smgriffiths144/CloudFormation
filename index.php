            <!DOCTYPE html>
            <html>
            <body>
              <center>

                <?php
                # Get the instance ID from meta-data and store it in the $instance_id variable
                $url = "http://169.254.169.254/latest/meta-data/instance-id";
                $instance_id = file_get_contents($url);
                # Get the instance's availability zone from metadata and store it in the $zone variable
                $url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
                $zone = file_get_contents($url);
				# Get the instance's Public IP from metadata and store it in the $pubip variable
                $url = "http://169.254.169.254/latest/meta-data/public-ipv4";
                $pubip = file_get_contents($url);
                ?>
                <h1>My Awesome Website</h1>
								<h1>boooooooooooooooooooooo yaykashan</h1>
				<h1>version 210818:13:33</h1>
                <h2>EC2 Instance ID: <?php echo $instance_id ?></h2>
                <h2>Availability Zone: <?php echo $zone ?></h2>
				<h2>Public IP Address: <?php echo $pubip ?></h2>

              </center>
            </body>
            </html>
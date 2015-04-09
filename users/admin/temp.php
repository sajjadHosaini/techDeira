
														
														<td><?php echo $lecturerow['lecture_desc']; ?></td>
														<td><?php echo $lecturerow['date']; ?></td>
														<td><img width="50px"src="../instructor/images/lectures/<?php echo $lecturerow['image']; ?>"/></td>
														<td>
														<a href="#" onclick='runDelLec("<?php echo $lecturerow['id']; ?>");'
															name="<?php echo $lecturerow['id']; ?>"><i
																class="fa fa-times-circle"></i></a></td>
													</tr>
        <?php
										$count ++;
									}
									?>
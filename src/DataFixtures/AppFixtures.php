<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Entity\Post;
use App\Entity\Comment;

/**
 * Class AppFixtures
 * @package App\DataFixtures
 */
class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private UserPasswordEncoderInterface $userPasswordEncoder;

    /**
     * @param UserPasswordEncoderInterface $userPasswordEncoder
     */
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }


    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $users = [];
        for($i = 1; $i <=10; $i++){
            $user = User::create(
                sprintf("email%d@email.com", $i),
                sprintf("user%d", $i)
            );
           $user->setPassword($this->userPasswordEncoder->encodePassword($user, "password"));
           $manager->persist($user);

           $users[] = $user;
        }

       foreach($users as $user){
           for($j = 1; $j <=10; $j++){
               $post = Post::create("content", $user);
               shuffle($users);
               foreach(array_slice($users, 0, 5) as $userCanLike){
                   $post->likedBy($userCanLike);
               }
               $manager->persist($post);

               for($k = 1; $k <= 10; $k++){
                    $comment = Comment::create(sprintf("Message %d", $k), $users[array_rand($users)], $post);
                   $manager->persist($comment);
               }
           }
       }

        $manager->flush();
    }
}

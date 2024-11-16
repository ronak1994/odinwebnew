<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;
use \Datetime;

class JobViewModel extends Model
{
    protected $table = 'job_view';

    protected $allowedFields = [
        'mobile_number',

    ];
    protected $updatedField = 'updated_at';

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data): array
    {

        return $this->getUpdatedDataWithHashedPassword($data);
    }

    protected function beforeUpdate(array $data): array
    {
        return $this->getUpdatedDataWithHashedPassword($data);
    }

    private function getUpdatedDataWithHashedPassword(array $data): array
    {
        if (isset($data['data']['password'])) {
            $plaintextPassword = $data['data']['password'];
            $data['data']['password'] = $this->hashPassword($plaintextPassword);
        }
        return $data;
    }

    private function hashPassword(string $plaintextPassword): string
    {
        return password_hash($plaintextPassword, PASSWORD_BCRYPT);
    }
    public function getJobviewData($jobId)
    {
        $builder = $this->db->table('job_view');
    
        // Select the fields explicitly from the joined tables to avoid ambiguity
        $builder->select('user_profiles.*, users.work_ex,users.mobile_number, users.id AS user_id, job_view.*');
    
        // Join the user_profiles table
        $builder->join('user_profiles', 'user_profiles.user_id = job_view.user_id');
    
        // Left join with the users table
        $builder->join('users', 'users.id = job_view.user_id', 'left');
    
        // Filter by job_applications.job_id
        $builder->where('job_view.job_id', $jobId);
    
        // Execute the query
        $query = $builder->get();
    
        // Check for query success
        if ($this->db->error()['code'] != 0) {
            // Log or handle error as needed
            return null;
        }
    
        // Get the result
        $result = $query->getResult();
    
        return $result ? $result : null;
    }

    /// get user information
  
    public function findJobById(string $id)
    {

        $user = $this
            ->asArray()
            ->where(['id' => $id])
            ->first();

        if (!$user) {
            return null;
        } else {
            return $user;
        }
    }
    public function findByuserId(string $id)
    {

        $user = $this
            ->asArray()
            ->where(['user_id' => $id])
            ->findAll();

        if (!$user) {
            return null;
        } else {
            return $user;
        }
    }

    public function findAll(int $limit = 0, int $offset = 0)
    {
        if ($this->tempAllowCallbacks) {
            // Call the before event and check for a return
            $eventData = $this->trigger('beforeFind', [
                'method'    => 'findAll',
                'limit'     => $limit,
                'offset'    => $offset,
                'singleton' => false,
            ]);

            if (!empty($eventData['returnData'])) {
                return $eventData['data'];
            }
        }

        $eventData = [
            'data'      => $this->doFindAll($limit, $offset),
            'limit'     => $limit,
            'offset'    => $offset,
            'method'    => 'findAll',
            'singleton' => false,
        ];

        if ($this->tempAllowCallbacks) {
            $eventData = $this->trigger('afterFind', $eventData);
        }

        $this->tempReturnType     = $this->returnType;
        $this->tempUseSoftDeletes = $this->useSoftDeletes;
        $this->tempAllowCallbacks = $this->allowCallbacks;

        return $eventData['data'];
    }
   

 
    public function save($data): bool
    {

        $user_id = $data['user_id'];
        $job_id = $data['job_id'];
       
    
        $date = new DateTime();
        $date = date_default_timezone_set('Asia/Kolkata');

        $date1 = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `job_view`( `user_id`, `job_id`, `created_at`, `updated_at`) VALUES ('$user_id','$job_id','$date1','$date1')";


        //     echo "<pre>"; print_r($sql); echo "</pre>";
        // die();

        $post = $this->db->query($sql);
        // echo json_encode($post);
        if (!$post)
            throw new Exception('Post does not exist for specified id');

        return $post;
    }

    public function update1($id, $data): bool
    {

        // echo $id;

        if (empty($data)) {
            echo "1";
            return true;
        }

        $user_id = $data['user_id'];
        $job_id = $data['job_id'];
        $created_at = $data['created_at'];
        
        $date = new DateTime();
        $date = date_default_timezone_set('Asia/Kolkata');

        $date1 = date('Y-m-d H:i:s');


        $sql = "UPDATE `job_saves` SET  
        user_id = '$user_id',
        job_id = '$job_id',
      
        created_at = '$created_at',
        updated_at = '$date1'
          WHERE id = $id";
        // echo "<pre>"; print_r($sql);
        // echo "</pre>";
        $post = $this->db->query($sql);
        if (!$post)
            throw new Exception('Post does not exist for specified id');

        return $post;
    }
    public function deletedata($id)
    {
        $post = $this
            ->asArray()
            ->where(['id' => $id])
            ->delete();

        if (!$post) 
            throw new Exception('view job does not exist for specified id');

        return $post;
    }
}

<?php

namespace Custom\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Yaml\Yaml;
use Topxia\AdminBundle\Controller\BaseController;

class ExternalRoleController extends BaseController
{
    public function setUserRoleAction(Request $request, $id)
    {
        if (false === $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')
            && false === $this->get('security.context')->isGranted('ROLE_ADMIN')
        )
        {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUserService()->getUser($id);
        $currentUser = $this->getCurrentUser();

        $roles = $this->getExternalRoleService()->getRoleList();
        if ($request->getMethod() == 'POST')
        {
            $role_id = $request->request->get('roleId');
            if (!empty(intval($role_id)))
            {
                $this->getExternalRoleService()->saveUserRole($role_id, $user['id']);
            }
            return $this->redirect($this->generateUrl('admin_user'));
        }
        return $this->render('CustomAdminBundle:ExternalRole:roles-modal.html.twig',
            array('user' => $user,'roles' => $roles));
    }

    protected function getExternalRoleService()
    {
        return $this->getServiceKernel()->createService('Custom:AccessControl.ExternalRoleService');
    }
}

import {
  DashboardOutlined,
  SettingOutlined,
  GroupOutlined,
  ClusterOutlined,
  TeamOutlined,
  GlobalOutlined,
  SmileOutlined,
} from '@ant-design/icons';

const asideMenuConfig = [
  {
    name: '工作台',
    path: 'dashboard',
    icon: DashboardOutlined,
  },
  {
    name: '全局设置',
    path: 'setting',
    icon: SettingOutlined,
    children: [{
      name: '基础设置',
      path: 'basic',
      icon: SmileOutlined,
    }, {
      name: '公司信息',
      path: 'company',
      icon: SmileOutlined,
    }, {
      name: '网站信息',
      path: 'site',
      icon: SmileOutlined,
    }, {
      name: '邮件服务器',
      path: 'email',
      icon: SmileOutlined,
    }],
  },
  {
    name: '内容管理',
    path: 'content',
    icon: GroupOutlined,
    children: [{
      name: '模型管理',
      path: 'model',
      icon: SmileOutlined,
    }, {
      name: '内容管理',
      path: 'content',
      icon: SmileOutlined,
    }, {
      name: '栏目管理',
      path: 'category',
      icon: SmileOutlined,
    }, {
      name: '评论管理',
      path: 'comment',
      icon: SmileOutlined,
    }],
  },
  {
    name: '扩展模块',
    path: 'misc',
    icon: ClusterOutlined,
    children: [{
      name: '广告位管理',
      path: 'ads',
      icon: SmileOutlined,
    }, {
      name: '标签管理',
      path: 'segment',
      icon: SmileOutlined,
    }, {
      name: '导航管理',
      path: 'nav',
      icon: SmileOutlined,
    }, {
      name: '表单管理',
      path: 'form',
      icon: SmileOutlined,
    }],
  },
  {
    name: '权限管理',
    path: 'permission',
    icon: TeamOutlined,
    children: [{
      name: '用户管理',
      path: 'user',
      icon: SmileOutlined,
    }, {
      name: '角色管理',
      path: 'role',
      icon: SmileOutlined,
    }, {
      name: '权限管理',
      path: 'rule',
      icon: SmileOutlined,
    }],
  },
  {
    name: '系统管理',
    path: 'system',
    icon: GlobalOutlined,
    children: [{
      name: '系统管理',
      path: 'management',
      icon: SmileOutlined,
    }, {
      name: '数据库管理',
      path: 'database',
      icon: SmileOutlined,
    }, {
      name: '在线更新',
      path: 'upgrade',
      icon: SmileOutlined,
    }],
  },
];

export { asideMenuConfig };
